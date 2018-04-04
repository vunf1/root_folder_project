<!DOCTYPE html>
<!--
Copyright 2011 Google Inc.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
     http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
Author: Eric Bidelman (ericbidelman@chromium.org)
-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<title>Fullscreen API</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300|Raleway:100" rel="stylesheet" type="text/css">
<style>
::-webkit-scrollbar {
  width: 15px;
  background: white;
}
::-webkit-scrollbar-thumb {
  box-shadow: inset 0 0 99px rgba(0,0,0,.2);
  border: solid transparent;
  border-width: 6px 4px;
}
html, body {
  height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
}
body {
  margin: 2em;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300; 
  -webkit-columns: 2;
  -webkit-column-gap: 2.5em;
  -webkit-column-rule: 1px solid #eee;
  -moz-columns: 2;
  -moz-column-gap: 2.5em;
  -moz-column-rule: 1px solid #eee;
  /*text-align: justify;*/
}
h1, h2, h3 {
  font-family: 'Raleway', sans-serif;
  font-weight: normal;
  margin: 25px 0 10px 0;
  color: #888;
}
h1 {
  font-size: 60px;
  margin-top: 0;
}
h2 {
  font-size: 32px;
}
:-webkit-full-screen-document {
  
}
/* A full-screen element that is not the root element should be stretched to cover the viewport. */
:-webkit-full-screen:not(:root) {
  width: 90% !important;
  float: none !important;
}
:-webkit-full-screen video {
  width: 100%;
}
:-webkit-full-screen .tohide {
  display: none;
}
:-moz-full-screen:not(:root) {
  width: 90% !important;
  float: none !important;
}
:-moz-full-screen #fs-inner {
  display: table-cell;
  vertical-align: middle;
}
:-moz-full-screen #fs {
  width: 90%;
  margin: auto;
}
:-moz-full-screen video {
  width: 100%;
}
:-moz-full-screen .tohide {
  display: none;
}
#fs-container:-moz-full-screen {
  display: table;
  margin: auto;
  float: none;
  width: 100%;
  height: 100%;
}
#fs-container {
  float: right;
}
#fs {
  width: 400px;
  background: -webkit-linear-gradient(white 20%, #eee);
  background: -moz-linear-gradient(white 20%, #eee);
  box-shadow: 0 0 10px #ccc inset;
  border-radius: 10px;
  text-align: center;
  padding: 1em;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  margin-left: 1em;
}
#fs div:first-of-type {
  margin-bottom: 10px;
  text-transform: uppercase;
}
video {
  width: 350px;
}
button {
  display: inline-block;
  background: -webkit-gradient(linear, 0% 40%, 0% 70%, from(#F9F9F9), to(#E3E3E3));
  background: -webkit-linear-gradient(#F9F9F9 40%, #E3E3E3 70%);
  background: -moz-linear-gradient(#F9F9F9 40%, #E3E3E3 70%);
  background: -ms-linear-gradient(#F9F9F9 40%, #E3E3E3 70%);
  background: -o-linear-gradient(#F9F9F9 40%, #E3E3E3 70%);
  background: linear-gradient(#F9F9F9 40%, #E3E3E3 70%);
  border: 1px solid #999;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
button:hover {
  border-color: black;
}
button:active {
  background: -webkit-gradient(linear, 0% 40%, 0% 70%, from(#E3E3E3), to(#F9F9F9));
  background: -webkit-linear-gradient(#E3E3E3 40%, #F9F9F9 70%);
  background: -moz-linear-gradient(#E3E3E3 40%, #F9F9F9 70%);
  background: -ms-linear-gradient(#E3E3E3 40%, #F9F9F9 70%);
  background: -o-linear-gradient(#E3E3E3 40%, #F9F9F9 70%);
  background: linear-gradient(#E3E3E3 40%, #F9F9F9 70%);
}
iframe {
  width: 100%;
  height: 95px;
  border: 1px solid #eee;
  box-sizing: border-box;
}
</style>
</head>
<body>

<h1>Main Title</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec hendrerit mauris.
Nulla pellentesque, tortor ac euismod elementum, erat risus pellentesque magna, feugiat
posuere dui diam quis risus. Duis gravida sagittis viverra. Mauris a pretium diam. Mauris
lacinia blandit pulvinar. Morbi a volutpat purus. In hac habitasse platea dictumst. Fusce
malesuada tortor nisl, ut suscipit urna. Morbi nec justo ligula, ornare convallis mi.</p>

<div id="fs-container">
  <div id="fs-inner">
    <div id="fs">
      <div class="tohide">Check out this awesome video!</div>
      <video controls ondblclick="toggleFS(this)">
        <source src="http://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.webm"></source>
        <source src="http://www.yo-yo.org/mp4/yu.mp4"></source>
      </video>
      <button id="enter-exit-fs" onclick="enterFullscreen()">Toggle fullscreen</button>
      <div><small class="tohide">fullscreen: 'f',</small> <small>close: 'ENTER' or 'ESC'</small></div>
    </div>
  </div>
</div>

<p>Donec volutpat est et augue consectetur ac auctor libero ultrices.
Ut tellus nisi, convallis at gravida id, interdum sit amet augue. Nullam et lacus ac elit
pellentesque ornare ac a urna. Sed vestibulum porta erat, vel vulputate nunc pellentesque a.
Ut neque dui, vulputate quis pretium vitae, ornare ac turpis. Vivamus quam tellus, fringilla
at rhoncus eget, placerat vitae nunc. Nam feugiat quam vel nisl dignissim bibendum. Cras dictum,
sem et cursus rutrum, turpis magna dictum orci, lacinia sagittis elit elit sit amet elit.
Cras feugiat erat sit amet elit sagittis ultrices. Nam rhoncus mollis massa, ut ultricies
lectus dignissim nec.</p>

<h2>Subtitle</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec hendrerit mauris.
Nulla pellentesque, tortor ac euismod elementum, erat risus pellentesque magna, feugiat
posuere dui diam quis risus. Duis gravida sagittis viverra. Mauris a pretium diam. Mauris
lacinia blandit pulvinar. Morbi a volutpat purus. In hac habitasse platea dictumst. Fusce
malesuada tortor nisl, ut suscipit urna. Morbi nec justo ligula, ornare convallis mi.</p>

<p>Donec volutpat est et augue consectetur ac auctor libero ultrices.
Ut tellus nisi, convallis at gravida id, interdum sit amet augue. Nullam et lacus ac elit
pellentesque ornare ac a urna. Sed vestibulum porta erat, vel vulputate nunc pellentesque a.
Ut neque dui, vulputate quis pretium vitae, ornare ac turpis. Vivamus quam tellus, fringilla
at rhoncus eget, placerat vitae nunc.</p>

<h2>&lt;iframe&gt; content</h2>

<iframe src="fullscreen-frame.html" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec hendrerit mauris.
Nulla pellentesque, tortor ac euismod elementum, erat risus pellentesque magna, feugiat
posuere dui diam quis risus. Duis gravida sagittis viverra. Mauris a pretium diam. Mauris
lacinia blandit pulvinar. Morbi a volutpat purus. In hac habitasse platea dictumst. Fusce
malesuada tortor nisl, ut suscipit urna. Morbi nec justo ligula, ornare convallis mi.</p>

<script>
document.cancelFullScreen = document.webkitExitFullscreen || document.mozCancelFullScreen || document.msExitFullscreen || document.exitFullscreen;
var elem = document.querySelector(document.webkitExitFullscreen ? "#fs" : "#fs-container");
document.addEventListener('keydown', function(e) {
  switch (e.keyCode) {
    case 13: // ENTER. ESC should also take you out of fullscreen by default.
      e.preventDefault();
      document.cancelFullScreen(); // explicitly go out of fs.
      break;
    case 70: // f
      enterFullscreen();
      break;
  }
}, false);
function toggleFS(el) {
  if (el.webkitEnterFullScreen) {
    el.webkitEnterFullScreen();
  } else {
    if (el.mozRequestFullScreen) {
      el.mozRequestFullScreen();
    } else {
      el.requestFullscreen();
    }
  }
  el.ondblclick = exitFullscreen;
}
function onFullScreenEnter() {
  console.log("Entered fullscreen!");
  elem.onwebkitfullscreenchange = onFullScreenExit;
  elem.onmozfullscreenchange = onFullScreenExit;
};
// Called whenever the browser exits fullscreen.
function onFullScreenExit() {
  console.log("Exited fullscreen!");
};
// Note: FF nightly needs about:config full-screen-api.enabled set to true.
function enterFullscreen() {
  console.log("enterFullscreen()");
  elem.onwebkitfullscreenchange = onFullScreenEnter;
  elem.onmozfullscreenchange = onFullScreenEnter;
  elem.onfullscreenchange = onFullScreenEnter;
  if (elem.webkitRequestFullscreen) {
    console.log('elem.webkitRequestFullscreen');
    elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
  } else {
    if (elem.mozRequestFullScreen) {
      console.log('elem.mozRequestFullScreen');
      elem.mozRequestFullScreen();
    } else if (elem.msRequestFullscreen) {
      console.log('elem.msRequestFullscreen');
      elem.msRequestFullscreen();
    } else {
      console.log('elem.requestFullscreen'); 
      elem.requestFullscreen();
    }
  }
  document.getElementById('enter-exit-fs').onclick = exitFullscreen;
}
function exitFullscreen() {
  console.log("exitFullscreen()");
  document.cancelFullScreen();
  document.getElementById('enter-exit-fs').onclick = enterFullscreen;
}
</script>
<script>window.onload = function () {
  console.log('onload - requesting full screen')
  enterFullscreen();
};</script>
</body>
</html>