<?php

$woonplaats=$_POST['woonplaats'];
$ramp=$_POST['ramp'];
$vriend=$_POST['vriend'];
$fan=$_POST['fan'];
$dierenliefde=$_POST['dierenliefde'];
$communicatie=$_POST['communicatie'];
$voorwerp=$_POST['voorwerp'];
$superkracht=$_POST['superkracht'];
$groente=$_POST['groente'];
?>
<html>
  <head>
    <title>Mad lips - onkunde</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  	<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
  </head>
  <body>
    <header>
          <h1>Mad Lips</h1>
            <nav>
              <ul>
                <li>
                  <a href="index.html">Er heerst paniek...</a>
                </li>
                <li>
                  <a href="onkunde.html">Onkunde</a>
                </li>
                <li>
                  <a href="aubergine.html">Aubergine</a>
                </li>
              </ul>
            </nav>
    </header>
    <main>
      <h2>Aubergine</h2>
      <div id="text">
        <p>Er heerst paniek in <?=$woonplaats?> want er is <?=$ramp?>, burgemeester <?=$vriend?> van <?=$woonplaats?>  is ten einde raad. Er zit maar een ding op we moeten super <?=$fan?> <?=$communicatie?>.</p>
        <p>Super <?=$vriend?> is snel ter plaatsen met zijn <?=$dierenliefde?> om <?=$ramp?> aan te pakken. Helaas is hij zijn <?=$voorwerp?> vergeten.</p>
        <p>Gelukkig weet zijn <?=$dierenliefde?> de dag alsnog te redden met zijn <?=$superkracht?>.</p>
        <p>Heel <?=$woonplaats?> keert weer terug naar het normale leven en burgemeester <?=$vriend?> geeft super <?=$fan?> een gouden <?=$groente?>.</p>
      </div>
    </main>
    <div id="madeby"><p>Deze website is gemaakt door Kevin Kraaijveld</p></div>
  </body>
</html>
