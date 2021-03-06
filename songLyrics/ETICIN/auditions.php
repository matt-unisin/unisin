<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="//fonts.googleapis.com/css?family=Architects Daughter" rel='stylesheet'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<title>Auditions</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
/* FROM songLyrics.css MAIN CSS */
body {
    font-family: 'Architects Daughter';
    font-size:17px;
    background-image:  url('../../images/header.jpg');
    background-color: #6e303b;
    background-repeat: no-repeat;
    background-position: top left;
    background-attachment: fixed;
    background-size: auto 768px;
    width: 100%;
    min-height: 100%;
    margin: 0;
    padding: 0;
    color: #FCF3CF;
}
.pointer {
    cursor: pointer;
}
table {
    margin: auto;
    width: 25%; 
    padding: 0;
}


/* GAME */
* {
    margin: 0;
    padding: 0;
}
.board {
    width: 400px;
    height: 637px;
    margin: 0 auto;
    background: #333 url(../../images/audition.png);
    cursor: url('../../images/guitar.png') 35 0,pointer;
    text-align: center;
    position: relative;
    overflow: hidden;
}
#scorebar {
    float: left;
    color: #fff;
}
.board #status {
    color: #f4ed67;
    background: #343434;
    position: absolute;
    bottom: 18px;
    left: 5px;
    font-size: 20px;
}
.board #status span.active {
    display: none;
}
.board #status span.inactive {
    display: inline;
}
.board:hover #status span.active {
    display: inline;
}
.board:hover #status span.inactive {
    display: none;
}
.enemy {
    height: 64px;
    width: 64px;
    margin-right: 5px;
    margin-top: 15px;
    position: absolute;
    top: -50%;
    left: 0;
    background: url('../../images/drum2.png');
}
.enemy_t1 {
    height: 48px;
    width: 47px;
    background: url('../../images/drum1.png');
}
.enemy_t2 {
    height: 63px;
    width: 64px;
    background: url('../../images/drum2.png');
}
.enemy_t3 {
    height: 94px;
    width: 128px;
    background: url('../../images/drum3.png');
}
/*
.bonus {
    height: 24px;
    width: 24px;
    position: absolute;
    top: -10%;
    left: 0;
    background-image: url(http://nojsgame.majorov.su/b1.png);
    -moz-appearance: button;
    -webkit-appearance: button;
    appearance: button;
}
.bonus:checked {
    background-image: url('http://nojsgame.majorov.su/b2.png') !important;
    width: 24px;
    height: 24px;
    position: static;
    -webkit-animation-name: none;
    animation-name: none;
    float: left;
}
*/
.board .enemy:hover {
    border-radius: 0;
    margin: 0;
    height: 640px;
    width: 400px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    background: #f00;
    overflow: visible;
    cursor: not-allowed;
    -webkit-animation: animation1 0s 0s linear !important;
    animation: animation1 0s 0s linear !important;
    -webkit-animation: animation2 0s 0s linear !important;
    animation: animation2 0s 0s linear !important;
    -webkit-animation: animation3 0s 0s linear !important;
    animation: animation3 0s 0s linear !important;
    -webkit-animation: animation4 0s 0s linear !important;
    animation: animation4 0s 0s linear !important;
    -webkit-animation: animation5 0s 0s linear !important;
    animation: animation5 0s 0s linear !important;
    -webkit-animation: animation6 0s 0s linear !important;
    animation: animation6 0s 0s linear !important;
    -webkit-animation: animation7 0s 0s linear !important;
    animation: animation7 0s 0s linear !important;
    -webkit-animation: animation8 0s 0s linear !important;
    animation: animation8 0s 0s linear !important;
    -webkit-animation: animation9 0s 0s linear !important;
    animation: animation9 0s 0s linear !important;
    -webkit-animation: animation10 0s 0s linear !important;
    animation: animation10 0s 0s linear !important;
}
.board .enemy:hover:before {
    background: #f00;
    font-size: 100px;
    content: "...NEXT!";
    top: 100px;
    left: 0;
    width: 400px;
    color: #fff;
    text-shadow: 1px 1px 1px #aaa;
    box-shadow: none;
}
.board .enemy:hover:after {
    display: none;
}
.board .bonus:hover {
    cursor: crosshair;
    zoom: 2;
}
.board:hover #bonus_01 {
    -webkit-animation: animation3 8s 2s linear;
    animation: animation3 8s 2s linear;
}
.board:hover #bonus_02 {
    -webkit-animation: animation4 12s 4s linear;
    animation: animation4 12s 4s linear;
}
.board:hover #bonus_03 {
    -webkit-animation: animation8 16s 6s linear;
    animation: animation8 16s 6s linear;
}
.board:hover #bonus_04 {
    -webkit-animation: animation2 16s 10s linear;
    animation: animation2 16s 10s linear;
}
.board:hover #bonus_05 {
    -webkit-animation: animation9 14s 15s linear;
    animation: animation9 14s 15s linear;
}
.board:hover #bonus_06 {
    -webkit-animation: animation7 12s 20s linear;
    animation: animation7 12s 20s linear;
}
.board:hover #bonus_07 {
    -webkit-animation: animation1 8s 26s linear;
    animation: animation1 8s 26s linear;
}
.board:hover #bonus_08 {
    -webkit-animation: animation3 10s 30s linear;
    animation: animation3 10s 30s linear;
}
.board:hover #bonus_09 {
    -webkit-animation: animation7 16s 40s linear;
    animation: animation7 16s 40s linear;
}
.board:hover #bonus_10 {
    -webkit-animation: animation4 16s 45s linear;
    animation: animation4 16s 45s linear;
}
.board:hover #enemy_01 {
    -webkit-animation: animation1 6s 0s linear;
    animation: animation1 6s 0s linear;
}
.board:hover #enemy_02 {
    -webkit-animation: animation2 5s 2s linear;
    animation: animation2 5s 2s linear;
}
.board:hover #enemy_03 {
    -webkit-animation: animation3 3s 3s linear;
    animation: animation3 3s 3s linear;
}
.board:hover #enemy_04 {
    -webkit-animation: animation4 6s 4s linear;
    animation: animation4 6s 4s linear;
}
.board:hover #enemy_05 {
    -webkit-animation: animation5 4s 5s linear;
    animation: animation5 4s 5s linear;
}
.board:hover #enemy_06 {
    -webkit-animation: animation2 3s 6s linear;
    animation: animation2 3s 6s linear;
}
.board:hover #enemy_07 {
    -webkit-animation: animation7 2s 8s linear;
    animation: animation7 2s 8s linear;
}
.board:hover #enemy_08 {
    -webkit-animation: animation4 5s 8s linear;
    animation: animation4 5s 8s linear;
}
.board:hover #enemy_09 {
    -webkit-animation: animation8 3s 9s linear;
    animation: animation8 3s 9s linear;
}
.board:hover #enemy_10 {
    -webkit-animation: animation6 4s 10s linear;
    animation: animation6 4s 10s linear;
}
.board:hover #enemy_11 {
    -webkit-animation: animation1 6s 10s linear;
    animation: animation1 6s 10s linear;
}
.board:hover #enemy_12 {
    -webkit-animation: animation6 4s 11s linear;
    animation: animation6 4s 11s linear;
}
.board:hover #enemy_13 {
    -webkit-animation: animation2 8s 12s linear;
    animation: animation2 8s 12s linear;
}
.board:hover #enemy_14 {
    -webkit-animation: animation9 4s 13s linear;
    animation: animation9 4s 13s linear;
}
.board:hover #enemy_15 {
    -webkit-animation: animation3 5s 13s linear;
    animation: animation3 5s 13s linear;
}
.board:hover #enemy_16 {
    -webkit-animation: animation10 7s 14s linear;
    animation: animation10 7s 14s linear;
}
.board:hover #enemy_17 {
    -webkit-animation: animation7 3s 15s linear;
    animation: animation7 3s 15s linear;
}
.board:hover #enemy_18 {
    -webkit-animation: animation3 5s 16s linear;
    animation: animation3 5s 16s linear;
}
.board:hover #enemy_19 {
    -webkit-animation: animation6 4s 16s linear;
    animation: animation6 4s 16s linear;
}
.board:hover #enemy_20 {
    -webkit-animation: animation1 3s 17s linear;
    animation: animation1 3s 17s linear;
}
.board:hover #enemy_21 {
    -webkit-animation: animation2 4s 17s linear;
    animation: animation2 4s 17s linear;
}
.board:hover #enemy_22 {
    -webkit-animation: animation1 5s 18s linear;
    animation: animation1 5s 18s linear;
}
.board:hover #enemy_23 {
    -webkit-animation: animation4 9s 19s linear;
    animation: animation4 9s 19s linear;
}
.board:hover #enemy_24 {
    -webkit-animation: animation9 2s 20s linear;
    animation: animation9 2s 20s linear;
}
.board:hover #enemy_25 {
    -webkit-animation: animation7 3s 20s linear;
    animation: animation7 3s 20s linear;
}
.board:hover #enemy_26 {
    -webkit-animation: animation1 5s 20s linear;
    animation: animation1 5s 20s linear;
}
.board:hover #enemy_27 {
    -webkit-animation: animation9 6s 21s linear;
    animation: animation9 6s 21s linear;
}
.board:hover #enemy_28 {
    -webkit-animation: animation3 3s 22s linear;
    animation: animation3 3s 22s linear;
}
.board:hover #enemy_29 {
    -webkit-animation: animation6 4s 23s linear;
    animation: animation6 4s 23s linear;
}
.board:hover #enemy_30 {
    -webkit-animation: animation4 5s 24s linear;
    animation: animation4 5s 24s linear;
}
.board:hover #enemy_31 {
    -webkit-animation: animation9 4s 24s linear;
    animation: animation9 4s 24s linear;
}
.board:hover #enemy_32 {
    -webkit-animation: animation6 2s 25s linear;
    animation: animation6 2s 25s linear;
}
.board:hover #enemy_33 {
    -webkit-animation: animation3 3s 26s linear;
    animation: animation3 3s 26s linear;
}
.board:hover #enemy_34 {
    -webkit-animation: animation4 5s 26s linear;
    animation: animation4 5s 26s linear;
}
.board:hover #enemy_35 {
    -webkit-animation: animation10 8s 27s linear;
    animation: animation10 8s 27s linear;
}
.board:hover #enemy_36 {
    -webkit-animation: animation2 3s 27s linear;
    animation: animation2 3s 27s linear;
}
.board:hover #enemy_37 {
    -webkit-animation: animation7 2s 28s linear;
    animation: animation7 2s 28s linear;
}
.board:hover #enemy_38 {
    -webkit-animation: animation4 5s 28s linear;
    animation: animation4 5s 28s linear;
}
.board:hover #enemy_39 {
    -webkit-animation: animation1 3s 29s linear;
    animation: animation1 3s 29s linear;
}
.board:hover #enemy_40 {
    -webkit-animation: animation6 4s 30s linear;
    animation: animation6 4s 30s linear;
}
.board:hover #enemy_41 {
    -webkit-animation: animation9 4s 24s linear;
    animation: animation9 4s 24s linear;
}
.board:hover #enemy_42 {
    -webkit-animation: animation6 2s 25s linear;
    animation: animation6 2s 25s linear;
}
.board:hover #enemy_43 {
    -webkit-animation: animation3 3s 26s linear;
    animation: animation3 3s 26s linear;
}
.board:hover #enemy_44 {
    -webkit-animation: animation4 5s 26s linear;
    animation: animation4 5s 26s linear;
}
.board:hover #enemy_45 {
    -webkit-animation: animation10 8s 27s linear;
    animation: animation10 8s 27s linear;
}
.board:hover #enemy_46 {
    -webkit-animation: animation2 3s 27s linear;
    animation: animation2 3s 27s linear;
}
.board:hover #enemy_47 {
    -webkit-animation: animation7 2s 28s linear;
    animation: animation7 2s 28s linear;
}
.board:hover #enemy_48 {
    -webkit-animation: animation4 5s 28s linear;
    animation: animation4 5s 28s linear;
}
.board:hover #enemy_49 {
    -webkit-animation: animation1 3s 29s linear;
    animation: animation1 3s 29s linear;
}
.board:hover #enemy_50 {
    -webkit-animation: animation6 4s 30s linear;
    animation: animation6 4s 30s linear;
}
@-webkit-keyframes animation1 {
    0% {
        left: 260px;
        top: -10%;
    }
    100% {
        left: 260px;
        top: 100%;
    }
}
@-webkit-keyframes animation2 {
    0% {
        left: 50px;
        top: -10%;
    }
    100% {
        left: 50px;
        top: 100%;
    }
}
@-webkit-keyframes animation3 {
    0% {
        left: 150px;
        top: -10%;
    }
    100% {
        left: 200px;
        top: 100%;
    }
}
@-webkit-keyframes animation4 {
    0% {
        left: 300px;
        top: -10%;
    }
    100% {
        left: 200px;
        top: 100%;
    }
}
@-webkit-keyframes animation5 {
    0% {
        left: 150px;
        top: -10%;
    }
    100% {
        left: 150px;
        top: 100%;
    }
}
@-webkit-keyframes animation6 {
    0% {
        left: 50px;
        top: -10%;
    }
    100% {
        left: 250px;
        top: 100%;
    }
}
@-webkit-keyframes animation7 {
    0% {
        left: 300px;
        top: -10%;
    }
    100% {
        left: 0;
        top: 100%;
    }
}
@-webkit-keyframes animation8 {
    0% {
        left: 0;
        top: -10%;
    }
    100% {
        left: 300px;
        top: 100%;
    }
}
@-webkit-keyframes animation9 {
    0% {
        left: 200px;
        top: -10%;
    }
    100% {
        left: 150px;
        top: 100%;
    }
}
@-webkit-keyframes animation10 {
    0% {
        left: 250px;
        top: -10%;
    }
    100% {
        left: 100px;
        top: 100%;
    }
}
@-webkit-keyframes animation99 {
    0% {
        left: 50px;
        top: -40%;
    }
    100% {
        left: 50px;
        top: 30%;
    }
}
@keyframes animation1 {
    0% {
        left: 260px;
        top: -10%;
    }
    100% {
        left: 260px;
        top: 100%;
    }
}
@keyframes animation2 {
    0% {
        left: 50px;
        top: -10%;
    }
    100% {
        left: 50px;
        top: 100%;
    }
}
@keyframes animation3 {
    0% {
        left: 150px;
        top: -10%;
    }
    100% {
        left: 200px;
        top: 100%;
    }
}
@keyframes animation4 {
    0% {
        left: 300px;
        top: -10%;
    }
    100% {
        left: 200px;
        top: 100%;
    }
}
@keyframes animation5 {
    0% {
        left: 150px;
        top: -10%;
    }
    100% {
        left: 150px;
        top: 100%;
    }
}
@keyframes animation6 {
    0% {
        left: 50px;
        top: -10%;
    }
    100% {
        left: 250px;
        top: 100%;
    }
}
@keyframes animation7 {
    0% {
        left: 300px;
        top: -10%;
    }
    100% {
        left: 0;
        top: 100%;
    }
}
@keyframes animation8 {
    0% {
        left: 0;
        top: -10%;
    }
    100% {
        left: 300px;
        top: 100%;
    }
}
@keyframes animation9 {
    0% {
        left: 200px;
        top: -10%;
    }
    100% {
        left: 150px;
        top: 100%;
    }
}
@keyframes animation10 {
    0% {
        left: 250px;
        top: -10%;
    }
    100% {
        left: 100px;
        top: 100%;
    }
}
@keyframes animation99 {
    0% {
        left: 50px;
        top: -40%;
    }
    100% {
        left: 50px;
        top: 30%;
    }
}
.board #finish {
    font-size: 20px;
    position: absolute;
    top: -40%;
    left: 60px;
    text-align: center;
    display: none;
    width: 300px;
    padding: 20px 50px;
    background: #fff;
    box-shadow: 4px 4px 4px #ccc;
    border-radius: 10px;
    color: #222;
}
.board:hover #finish {
    -webkit-animation: animation99 5s 30s linear;
    animation: animation99 5s 30s linear;
    animation-fill-mode: forwards;
    display: block;
}
</style>
<script>
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
if(document.URL !="https://unisin.000webhostapp.com/songLyrics/ETICIN/iayf.php"){
    window.location ="https://unisin.000webhostapp.com/songLyrics/ETICIN/iayf.php";
    }
}
function goBack() {
    window.history.back();
}
</script>
</head>
<body>
<a href="indexDT.php#anchor3"><img src="../../images/previousBig.png" align="left" style="z-index:9999;margin-right: 10px;padding:20px 10px;" width="11%" alt="previous" /></a>
<img src="../../images/pause.png" align="right" style="z-index:9999;margin-right: 10px;padding:20px 5px;" width="9%" alt="MUTE/UNMUTE" onclick="playOrPauseSong(this);" />
<!--
<a href="iayf.php"><img src="../../images/nextBig.png" align="right" style="margin-right: 10px;padding:20px 5px;" width="9%" alt="next" /></a>
-->
<!-- GAME -->
<form>
    <div class="board">
		<div id="scorebar"></div>
		<br /><br /><br /><br />
<!--
        <input id="bonus_01" name="radio1" class="bonus" type="radio">
        <input id="bonus_02" name="radio2" class="bonus" type="radio">
        <input id="bonus_03" name="radio3" class="bonus" type="radio">
        <input id="bonus_04" name="radio4" class="bonus" type="radio">
        <input id="bonus_05" name="radio5" class="bonus" type="radio">
        <input id="bonus_06" name="radio6" class="bonus" type="radio">
        <input id="bonus_07" name="radio7" class="bonus" type="radio">
        <input id="bonus_08" name="radio8" class="bonus" type="radio">
        <input id="bonus_09" name="radio9" class="bonus" type="radio">
        <input id="bonus_10" name="radio10" class="bonus" type="radio">
-->
        <p class="enemy" id="enemy_01"></p>
        <p class="enemy" id="enemy_02"></p>
        <p class="enemy" id="enemy_03"></p>
        <p class="enemy enemy_t1" id="enemy_04"></p>
        <p class="enemy" id="enemy_05"></p>
        <p class="enemy" id="enemy_06"></p>
        <p class="enemy enemy_t3" id="enemy_07"></p>
        <p class="enemy" id="enemy_08"></p>
        <p class="enemy" id="enemy_09"></p>
        <p class="enemy" id="enemy_10"></p>
        <p class="enemy enemy_t1" id="enemy_11"></p>
        <p class="enemy" id="enemy_12"></p>
        <p class="enemy" id="enemy_13"></p>
        <p class="enemy enemy_t2" id="enemy_14"></p>
        <p class="enemy" id="enemy_15"></p>
        <p class="enemy" id="enemy_16"></p>
        <p class="enemy enemy_t3" id="enemy_17"></p>
        <p class="enemy" id="enemy_18"></p>
        <p class="enemy" id="enemy_19"></p>
        <p class="enemy enemy_t3" id="enemy_20"></p>
        <p class="enemy" id="enemy_21"></p>
        <p class="enemy" id="enemy_22"></p>
        <p class="enemy enemy_t1" id="enemy_23"></p>
        <p class="enemy" id="enemy_24"></p>
        <p class="enemy enemy_t2" id="enemy_25"></p>
        <p class="enemy" id="enemy_26"></p>
        <p class="enemy" id="enemy_27"></p>
        <p class="enemy enemy_t3" id="enemy_28"></p>
        <p class="enemy" id="enemy_29"></p>
        <p class="enemy" id="enemy_30"></p>
        <p class="enemy" id="enemy_31"></p>
        <p class="enemy" id="enemy_32"></p>
        <p class="enemy" id="enemy_33"></p>
        <p class="enemy" id="enemy_34"></p>
        <p class="enemy" id="enemy_35"></p>
        <p class="enemy" id="enemy_36"></p>
        <p class="enemy" id="enemy_37"></p>
        <p class="enemy" id="enemy_38"></p>
        <p class="enemy enemy_t3" id="enemy_39"></p>
        <p class="enemy" id="enemy_40"></p>
        <p class="enemy" id="enemy_41"></p>
        <p class="enemy" id="enemy_42"></p>
        <p class="enemy" id="enemy_43"></p>
        <p class="enemy enemy_t2" id="enemy_44"></p>
        <p class="enemy" id="enemy_45"></p>
        <p class="enemy" id="enemy_46"></p>
        <p class="enemy enemy_t1" id="enemy_47"></p>
        <p class="enemy" id="enemy_48"></p>
        <p class="enemy" id="enemy_49"></p>
        <p class="enemy" id="enemy_50"></p>
        <p id="finish">Well done but...<br />you still can't join the band!<br />Muhuhhahaha!</p>
        <p id="status"><strong>Help:</strong> <span class="inactive">move cursor to the stage.</span><span class="active">Don't get hit by the drums!</span></p>
    </div>
	<audio loop autoplay></audio>
</form>


<!-- HIDDEN MEDIA PLAYER -->
	<div id="container" style="display:none;">
	    <div class="logo">
			<img src="../../images/EIOKcover.jpg" alt="UnisiN - Everything is OK!" />
			<input id="songSlider" class="song-slider" type="range" min="0" step="1" onchange="seekSong()" />
	    </div>
		<div class="audio-player-cont">
			<div class="player">
			    <div id="currentTime" class="current-time">00:00</div>
				<div id="duration" class="duration">00:00</div>
				<div class="controllers">
					<img src="../../images/previous.png" width="30" onclick="previous();" alt="previous" />
					<img src="../../images/pause.png" width="40" onclick="playOrPauseSong(this);" alt="pause" />
					<img src="../../images/next.png" width="30" onclick="next();" alt="next" />
					<img src="../../images/volume-down.png" width="15" style="margin-left:25px;" alt="volume down" />
					<input id="volumeSlider" class="volume-slider" type="range" min="0" max="1" step="0.01" onchange="adjustVolume()" />
					<img src="../../images/volume-up.png" width="15" style="margin-left:8px;" alt="volume up" />
				</div>
				<div id="nextSongTitle" class="next-song-title"></div>
				<div id="songTitle" class="song-title">Song title</div>
			</div>
		</div>
		<!-- <a class="button" onclick="window.open('', '_self', ''); window.close();">X Close</a> -->
	</div>
<script src="../../js/audioPlayer_auditions.js"></script>
</div>
</body>
</html>