"use strict";

// function musicBand(info) {
// 	document.getElementsByClassName('wrapper')[0].insertAdjacentHTML("beforeEnd", 
// 	`<div class="card"> 
// 		<div class="card__container card__container--closed">
// 			<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
// 				<defs>
// 					<clipPath id="` + info[0].bandDiv + `">
// 						<circle class="clip" cx="960" cy="250" r="992"></circle>
// 					</clipPath>
// 				</defs>
// 				<image clip-path="url(#` + info[0].bandDiv + `)" width="1920" height="600" xlink:href="` + info[0].foto + `"></image>
// 			</svg>
// 			<div class="card__content">
// 				<i class="card__btn-close fa fa-times"></i>
// 				<div class="card__caption">
// 					<h2 class="card__title">` + info[0].bandName + `</h2>
// 					<p class="card__subtitle">` + info[0].genre + `</p>
// 				</div>
// 				<div class="card__copy">
// 					<div class="container ` + info[0].bandDiv + `">
// 						` + info[0].description + `<br>
// 					</div>                          
// 				</div>
// 			</div>
// 			<div class="section padding-bottom">
// 		</div>
// 	</div>`)
// };

let lastPlay = null;

function fastPlayer(database) { // for fisrt page
	let marker = database[0].marker;
	
	let Spectrum = WaveSurfer.create({
		container: '#' + database[0].container,
		progressColor: "#03a9f4",
		height: 100,
		//barWidth: 1.5,
		//barRadius: 3,
		// barGap: 1.5,
		// partialRender: true,
		backend: 'MediaElement',
	});
	// Spectrum.load('./media/startpeak.mp3');
	let song = 1;
	startPeaks(database[song][1]);

	let songname = document.getElementById(marker + `_songname`)
	songname.innerHTML = database[song][0];

	let pausePlay = {
		knobplay: document.getElementById(marker + `_play`),
		knobpause: document.getElementById(marker + `_pause`),
	};

	let nextPrev = null;

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
	};

	function prevTrack() {
		song -= 1;
		if(song == 0){song = database.length - 1};
		changesong(database[song][1]);
		showPause();
		pauseLastPlay();
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
		lastPlay = {Spectrum, pausePlay, database}; // если тот же, то зачем перезаписывать? переписать логику
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
				songname.innerHTML = database[song][0];
				}, 500)
			};   
	};

	function peakToJson(arrayPeaks, cursong) {
		let send = new FormData;
		send.append('peaks', JSON.stringify(arrayPeaks));
		send.append('fileName', [cursong + '.json']);

		fetch('/savePeaks.php', {
		  method: 'POST',
		  cache : 'no-cache',
		  body: send
		})
		 //  .then(res=>res.json())
		 //  .then(console.log)
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
				// Spectrum.load(cursong, peaks);
			};
	};  

	return {
		buttons: pausePlay + nextPrev,
		Spectrum: Spectrum,
		/*transBar: transBar, */
	};
};  

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
		lastPlay = {Spectrum, pausePlay, database}; // если тот же, то зачем перезаписывать? переписать логику
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
		send.append('peaks', JSON.stringify(arrayPeaks));
		send.append('fileName', [cursong + '.json']);

		fetch('/savePeaks.php', {
			  method: 'POST',
			  cache : 'no-cache',
			  body: send
		   })
		 //  .then(res=>res.json())
		 //  .then(console.log)
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
	}, false); 

	return {
		buttons: pausePlay + nextPrev,
		Spectrum: Spectrum,
	};
};

function videoContent(database) {
	document.getElementsByClassName(database[0].bandDiv)[0].insertAdjacentHTML("beforeEnd", 
		`<div class="six columns">   
			<figure class="youtube">` + database[0].code + `</figure>
		</div>`);
};

/* <div class="six columns">
			<div class="project-details">
				<h5>` + database[0].Name + `</h5>    
				<p><strong>Date:</strong> August 23, 2014</p>
			</div>
		</div>
		<div class="clear"></div> */
		