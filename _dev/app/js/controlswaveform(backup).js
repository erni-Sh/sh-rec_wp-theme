"use strict";

let lastPlay = null;

function audioPlayer(database) {
    let marker = database[0].marker
    let transBar = document.getElementsByClassName(marker);
    transBar[0].insertAdjacentHTML("afterBegin", 
        `<ul>
            <li id="` + marker + `_prev"><img src="img/knobprev.png" /></li>
            <li><img id="` + marker + `_pause" src="img/knobpause.png" style="opacity: 0; position: absolute;"/>
                <img id="` + marker + `_play" src="img/knobplay.png" /></li>
            <li id="` + marker + `_next"><img src="img/knobnext.png" /></li>
        </ul>`);

    let buttons = {
        knobplay: document.getElementById(marker + `_play`),
        knobpause: document.getElementById(marker + `_pause`),
        prevtrack: document.getElementById(marker + `_prev`),
        nexttrack: document.getElementById(marker + `_next`),
    };


    let Spectrum = WaveSurfer.create({
        container: '#' + database[0].container,
        progressColor: "#03a9f4",
        height: 100,
        barWidth: 1.5,
        barRadius: 3,
        barGap: 1.5,
        backend: 'MediaElement'
    });

    Spectrum.load('./media/startpeak.mp3');

    let song = 1;
    let songname = document.getElementById(marker + `_songname`)
    songname.innerHTML = '<strong>Song:</strong> ' + (database[song][0]);

    buttons.knobplay.addEventListener("click", function(){
        switch (database[0].curState) {
            case 'unplayed':
                showPause();
                changesong(database[song][1]);
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

    buttons.nexttrack.addEventListener("click", function(){
        song += 1;
        if(song > database.length - 1){song = 1};
        changesong(database[song][1]);
        showPause();
        pauseLastPlay();
    }, false);

    buttons.prevtrack.addEventListener("click", function(){
        song -= 1;
        if(song == 0){song = database.length - 1};
        changesong(database[song][1]);
        showPause();
        pauseLastPlay();
    }, false);

    function pauseLastPlay() {
        if (lastPlay != null) {
            if (lastPlay.Spectrum === Spectrum) {
            } else {
                lastPlay.Spectrum.pause();
                lastPlay.database[0].curState = 'pause'; // как ShowPlay
                lastPlay.buttons.knobplay.style.opacity = 0.8;
                lastPlay.buttons.knobpause.style.opacity = 0;
            };
        };
        lastPlay = {Spectrum, buttons, database}; // если тот же, то зачем перезаписывать? переписать логику
    };

    function showPause() {
        database[0].curState = 'play';
        buttons.knobplay.style.opacity = 0;
        buttons.knobpause.style.opacity = 0.8;
    };

    function showPlay() {
        database[0].curState = 'pause';
        buttons.knobplay.style.opacity = 0.8;
        buttons.knobpause.style.opacity = 0;
    };

    function changesong(cursong) {
        Spectrum.container.style.opacity = 0;
        setTimeout(() => Spectrum.load(cursong), 500);
        Spectrum.on('ready', function () {
            Spectrum.play();
            Spectrum.container.style.opacity = 0.5;
                });
        songname.innerHTML = '<strong>Song:</strong> ' + (database[song][0]);
    };
        /*
        window.addEventListener("resize", function(){
        // Get the current progress according to the cursor position
        let currentProgress = Spectrum.getCurrentTime() / Spectrum.getDuration();
        // Reset graph
        Spectrum.empty();
        Spectrum.drawBuffer();
        // Set original position
        Spectrum.seekTo(currentProgress);
        }, false); */

    return {
        buttons: buttons,
        Spectrum: Spectrum,
        transBar: transBar,
    };
};

let player_PL = audioPlayer(KARJALA_PL);
let player_BV = audioPlayer(KARJALA_BV);
let player_TS = audioPlayer(KARJALA_TS);

let player_DWH = audioPlayer(MNTRTRS_DWH);
           