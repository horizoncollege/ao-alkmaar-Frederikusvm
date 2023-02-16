<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="galgjestyle.css?<?php echo time();?>">
  <title>Galgje</title>
</head>
<body>

<div class="headerdiv">
  <h2>Welkom bij Galgje.</h2>
  <h3>U heeft negen beurten om het woord te raden. De willekeurige woorden zijn in het Engels.</h3>
</div>

<div class="mainvlak">

<div class='selectietekst'>

  <p>Wil U zelf een woord invullen of een willekeurig woord proberen te raden?</p>
    <form action="chosen.php" method="get">
      <input type="radio" name="method" value="manual" id="manual"><label for="manual"> Eigen woord</label><br>
      <input type="radio" name="method" value="auto" id="auto"><label for="auto"> Willekeurig</label><br>
      <input type="submit" value="Speel">
    </form>
</div>

<div class="afbeelding">
  <img src="../../images/galgje.png">
</div>

</div>

</body>
</html>
