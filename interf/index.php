<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="piano.css"/>
    <script src="vendor/jquery-1.7.2.min.js"></script>
    <script src="vendor/jquery-ui-1.8.20.custom.min.js"></script>
    <script src="manex.js"></script>
    <title>28-key Steinway</title>
  </head>
  <body>
    <audio id="sound-A2" src="samples/A2.ogg" preload="auto"></audio>
    <audio id="sound-Bb2" src="samples/Bb2.ogg" preload="auto"></audio>
    <audio id="sound-B2" src="samples/B2.ogg" preload="auto"></audio>
    <audio id="sound-Ab3" src="samples/Ab3.ogg" preload="auto"></audio>
    <audio id="sound-A3" src="samples/A3.ogg" preload="auto"></audio>
    <audio id="sound-Bb3" src="samples/Bb3.ogg" preload="auto"></audio>
    <audio id="sound-B3" src="samples/B3.ogg" preload="auto"></audio>
    <audio id="sound-C3" src="samples/C3.ogg" preload="auto"></audio>
    <audio id="sound-Db3" src="samples/Db3.ogg" preload="auto"></audio>
    <audio id="sound-D3" src="samples/D3.ogg" preload="auto"></audio>
    <audio id="sound-Eb3" src="samples/Eb3.ogg" preload="auto"></audio>
    <audio id="sound-E3" src="samples/E3.ogg" preload="auto"></audio>
    <audio id="sound-F3" src="samples/F3.ogg" preload="auto"></audio>
    <audio id="sound-Gb3" src="samples/Gb3.ogg" preload="auto"></audio>
    <audio id="sound-G3" src="samples/G3.ogg" preload="auto"></audio>
    <audio id="sound-Ab4" src="samples/Ab4.ogg" preload="auto"></audio>
    <audio id="sound-A4" src="samples/A4.ogg" preload="auto"></audio>
    <audio id="sound-Bb4" src="samples/Bb4.ogg" preload="auto"></audio>
    <audio id="sound-B4" src="samples/B4.ogg" preload="auto"></audio>
    <audio id="sound-C4" src="samples/C4.ogg" preload="auto"></audio>
    <audio id="sound-Db4" src="samples/Db4.ogg" preload="auto"></audio>
    <audio id="sound-D4" src="samples/D4.ogg" preload="auto"></audio>
    <audio id="sound-Eb4" src="samples/Eb4.ogg" preload="auto"></audio>
    <audio id="sound-E4" src="samples/E4.ogg" preload="auto"></audio>
    <audio id="sound-F4" src="samples/F4.ogg" preload="auto"></audio>
    <audio id="sound-Gb4" src="samples/Gb4.ogg" preload="auto"></audio>
    <audio id="sound-G4" src="samples/G4.ogg" preload="auto"></audio>
    <audio id="sound-C5" src="samples/C5.ogg" preload="auto"></audio>
    <div class="piano">
      <noscript class="piano-javascript">This program requires Javascript and HTML5 Audio support.</noscript>
      <div class="piano-container">
        <div class="piano-keys">
          <div id="1" onclick="notaIdatzi(this)" class="piano-white piano-A2"></div>
          <div id="2" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Bb2"></div></div>
          <div id="3" onclick="notaIdatzi(this)" class="piano-white piano-B2"></div>
          <div id="4" onclick="notaIdatzi(this)" class="piano-white piano-C3"></div>
          <div id="5" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Db3"></div></div>
          <div id="6" onclick="notaIdatzi(this)" class="piano-white piano-D3"></div>
          <div id="7" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Eb3"></div></div>
          <div id="8" onclick="notaIdatzi(this)" class="piano-white piano-E3"></div>
          <div id="9" onclick="notaIdatzi(this)" class="piano-white piano-F3"></div>
          <div id="10" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Gb3"></div></div>
          <div id="11" onclick="notaIdatzi(this)" class="piano-white piano-G3"></div>
          <div id="12" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Ab3"></div></div>
          <div id="13" onclick="notaIdatzi(this)" class="piano-white piano-A3"></div>
          <div id="14" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Bb3"></div></div>
          <div id="15" onclick="notaIdatzi(this)" class="piano-white piano-B3"></div>
          <div id="16" onclick="notaIdatzi(this)" class="piano-white piano-C4"></div>
          <div id="17" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Db4"></div></div>
          <div id="18" onclick="notaIdatzi(this)" class="piano-white piano-D4"></div>
          <div id="19" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Eb4"></div></div>
          <div id="20" onclick="notaIdatzi(this)" class="piano-white piano-E4"></div>
          <div id="21" onclick="notaIdatzi(this)" class="piano-white piano-F4"></div>
          <div id="22" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Gb4"></div></div>
          <div id="23" onclick="notaIdatzi(this)" class="piano-white piano-G4"></div>
          <div id="24" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Ab4"></div></div>
          <div id="25" onclick="notaIdatzi(this)" class="piano-white piano-A4"></div>
          <div id="26" onclick="notaIdatzi(this)" class="piano-black"><div class="piano-black-raised piano-Bb4"></div></div>
          <div id="27" onclick="notaIdatzi(this)" class="piano-white piano-B4"></div>
          <div id="28" onclick="notaIdatzi(this)" class="piano-white piano-C5"></div>
        </div>
        <div class="piano-pedal">Just listen to that sustain!</div>
      </div>
    </div>
    <center>
      <label id="notak"></label>
      <br/>
      <br/>
      <label id="emaitza"></label>
      <br/>
      <input type="button" name="Bilatu" value="Bilatu" onclick="bilatuNotak()"/>
      <br/>
      <input type="button" name="Garbitu" value="Garbitu" onclick="garbituNotak()"/>
    </center>
    <script src="piano.js"></script>
    <p style="text-align:center; font-size:smaller;">
      <a href="https://github.com/michaelmp/js-piano">source code</a>
    </p>
  </body>
</html>