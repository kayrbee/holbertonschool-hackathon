<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="badkeyboard.css">
</head>
<body>
  <input
    id="textInput"
    type="text"
    inputmode="none"
    autocomplete="off"
    readonly
    placeholder="Tap letters below..."
  >
  <?php
    $letters = [ 'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z' ];
  ?>
  <div id="keyboard">
    <div class="row">
      <button data-key="<?php echo( $letters[1+18] );?>">P</button>
      <button data-key="<?php echo( $letters[2+18] );?>">Y</button>
      <button data-key="<?php echo( $letters[3+18] );?>">F</button>
      <button data-key="<?php echo( $letters[4+18] );?>">G</button>
      <button data-key="<?php echo( $letters[5+18] );?>">C</button>
      <button data-key="<?php echo( $letters[6+18] );?>">R</button>
      <button data-key="<?php echo( $letters[7+18] );?>">L</button>
    </div>

    <div class="row">
      <button data-key="<?php echo( $letters[0] );?>">A</button>
      <button data-key="<?php echo( $letters[1] );?>">O</button>
      <button data-key="<?php echo( $letters[2] );?>">E</button>
      <button data-key="<?php echo( $letters[3] );?>">U</button>
      <button data-key="<?php echo( $letters[4] );?>">I</button>
      <button data-key="<?php echo( $letters[5] );?>">D</button>
      <button data-key="<?php echo( $letters[6] );?>">H</button>
      <button data-key="<?php echo( $letters[7] );?>">T</button>
      <button data-key="<?php echo( $letters[8] );?>">N</button>
      <button data-key="<?php echo( $letters[9] );?>">S</button>
    </div>

    <div class="row">
      <button data-key="<?php echo( $letters[10] );?>">Q</button>
      <button data-key="<?php echo( $letters[11] );?>">J</button>
      <button data-key="<?php echo( $letters[12] );?>">K</button>
      <button data-key="<?php echo( $letters[13] );?>">X</button>
      <button data-key="<?php echo( $letters[14] );?>">B</button>
      <button data-key="<?php echo( $letters[15] );?>">M</button>
      <button data-key="<?php echo( $letters[16] );?>">W</button>
      <button data-key="<?php echo( $letters[17] );?>">V</button>
      <button data-key="<?php echo( $letters[18] );?>">Z</button>
      <button data-action="backspace">⌫</button>
      <button data-key=" ">Space</button>
      <button data-key="@">@</button>
      <button data-key="_">_</button>
      <button data-key=".">.</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>

