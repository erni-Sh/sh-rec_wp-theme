"use strict";

let lastPlay = null;

function musicAlbum(database) {
	let marker = database[0].marker;

	let Spectrum = WaveSurfer.create({
		container: '#' + database[0].container,
		progressColor: "#03a9f4",
		// height: 100,
		//barWidth: 1.5,
		//barRadius: 3,
		// barGap: 1.5,
		// partialRender: true,
		backend: 'MediaElement',
	});

	let song = 1;
	startPeaks(database[song][1]);
	
	let songname = document.getElementById(marker + `_songname`)
	// if (database[0].type != 'single'){songname.innerHTML = listOfSongs()};
	// songname.innerHTML = listOfSongs();

	let pausePlay = {
		knobplay: document.getElementById(marker + `_play`),
		knobpause: document.getElementById(marker + `_pause`),
	};

	let nextPrev = null;

	songname.addEventListener("click", function(){ // клик по списку песен
		let clName = parseInt(event.target.className.replace(/[^\d]/g, '')) // оставляем только числа
		if(song != clName || database[0].curState === 'unplayed') {
			song = Number(clName);
			changesong(database[song][1]);
			showPause();
			pauseLastPlay();
			markPlayedSong();
		}
	}, false);

	pausePlay.knobplay.addEventListener("click", function(){
		switch (database[0].curState) {
			case 'unplayed':
				changesong(database[song][1]);
				showPause();
				pauseLastPlay();
				break;
			case 'pause':
				showPause();
				Spectrum.play();
				pauseLastPlay();
				break;
			case 'play':
				showPlay();
				Spectrum.pause();     
				break;
		};
	}, false);

	if (database[0].type != 'single'){
			// console.log(marker);
			nextPrev = {
				prevtrack: document.getElementById(marker + `_prev`),
				nexttrack: document.getElementById(marker + `_next`),
			};

			nextPrev.nexttrack.addEventListener("click", function(){nextTrack()}, false);

			nextPrev.prevtrack.addEventListener("click", function(){prevTrack()}, false);
		};

	Spectrum.on('finish', function () {nextTrack()});

	Spectrum.on('waveform-ready', function () {
			peakToJson(Spectrum.backend.getPeaks(960), database[song][1]); // сохраняем пики
			// console.log(database[song][1]);
		});

	function nextTrack() {
		song += 1;
		if(song > database.length - 1){song = 1};
		changesong(database[song][1]);
		showPause();
		pauseLastPlay();
		markPlayedSong()
	};

	function prevTrack() {
		song -= 1;
		if(song == 0){song = database.length - 1};
		changesong(database[song][1]);
		showPause();
		pauseLastPlay();
		markPlayedSong()
	};

	function pauseLastPlay() {
		if (lastPlay != null) {
			if (lastPlay.Spectrum === Spectrum) {
			} else {
				lastPlay.Spectrum.pause();
				lastPlay.database[0].curState = 'pause'; // как ShowPlay
				lastPlay.pausePlay.knobplay.style.opacity = 0.7;
				lastPlay.pausePlay.knobpause.style.opacity = 0;
			};
		};
		lastPlay = {Spectrum, pausePlay, database}; 
	};

	function showPause() {
		database[0].curState = 'play';
		pausePlay.knobplay.style.opacity = 0;
		pausePlay.knobpause.style.opacity = 0.7;
	};

	function showPlay() {
		database[0].curState = 'pause';
		pausePlay.knobplay.style.opacity = 0.7;
		pausePlay.knobpause.style.opacity = 0;
	};

	function markPlayedSong(){
		for (let i = 1; i < (database.length); i++){
			songname.getElementsByClassName(i)[0].className = i;
		}
		songname.getElementsByClassName(song)[0].className += ' isPlayed';
	};

	function changesong(cursong) {
		if ((database[0].curState) === 'unplayed' && song === 1) {}
			else {Spectrum.container.style.opacity = 0};

		let requestURL = cursong + '.json'; // запрос peaks
		let request = new XMLHttpRequest();
		request.open('GET', requestURL);
		request.responseType = 'json';
		request.send();
		request.onload = function() {
			setTimeout(function() { // ждем анимацию
				let peaks = request.response;
				// Spectrum.backend.peaks = peaks;
				// Spectrum.drawBuffer();
				Spectrum.load(cursong, peaks);
				Spectrum.play();

				Spectrum.container.style.opacity = 0.5;
				}, 500)
			};   
	};

	function peakToJson(arrayPeaks, cursong) {
		let send = new FormData;
		send.append('action', 'save_peaks');
		send.append('peaks', JSON.stringify(arrayPeaks));
		send.append('fileName', [cursong + '.json']);

		// console.log(cursong + '.json');

		fetch('/wp-admin/admin-ajax.php', {
			  method: 'POST',
			  cache : 'no-cache',
			  credentials: 'same-origin',
			  body: send
		   })
		  // .then(res=>res.text())
		  // .then(console.log)
		// console.log(cursong)
	};

	function startPeaks(firstSong) {
		let requestURL = firstSong + '.json'; // запрос peaks
		let request = new XMLHttpRequest();
		request.open('GET', requestURL);
		request.responseType = 'json';
		request.send();
		request.onload = function() {
				let peaks = request.response;
				Spectrum.backend.peaks = peaks;
				Spectrum.drawBuffer();
			};
	};
		
	window.addEventListener("resize", function(){
	// Get the current progress according to the cursor position
		let currentProgress = Spectrum.getCurrentTime() / Spectrum.getDuration();
		// Reset graph
		Spectrum.empty();
		Spectrum.drawBuffer();

		// Set original position
		Spectrum.seekTo(currentProgress);
		if(lastPlay.database[0].curState === 'play')
			lastPlay.Spectrum.play();
	}, false); 

	// return {
	// 	buttons: pausePlay + nextPrev,
	// 	Spectrum: Spectrum,
	// };
};

function videoContent(database) {
	document.getElementsByClassName(database[0].bandDiv)[0].insertAdjacentHTML("beforeEnd", 
		`<div class="six columns">   
			<figure class="youtube">` + database[0].code + `</figure>
		</div>`);
};
		