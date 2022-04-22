<?php
    $dier=$_POST['dier'];
    $persoon=$_POST['persoon'];
    $land=$_POST['land'];
    $vervelen=$_POST['vervelen'];
    $speelgoed=$_POST['speelgoed'];
    $docent=$_POST['docent'];
    $euro=$_POST['euro'];
    $bezigheid=$_POST['bezigheid'];
?>
<html>
  <head>
    <title>Mad lips</title>
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
      <h2>Er heerst paniek...</h2>
      <div id="text">
          <p>Er heerst paniek in het koninkrijk <?=$land?>. Koning <?=$docent?> is ten einde raad en als koning <?=$docent?> ten einde raad is, dan roept hij ten-einde-raadsheer <?=$persoon?>.</p>
          <p>"<?=$persoon?>! Het is een ramp! Het is een schande!"</p>
          <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
          <p>"Mijn <?=$dier?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$speelgoed?> voor hem gekocht."</p>
          <p>"Majesteit, uw <?=$dier?> komt vast vanzelf weer terug?"</p>
          <p>"Ja dat is allemaal leuk en aardig, maar hoe moet ik in de tussentijd <?=$bezigheid?> leren?"</p>
          <p>"Maar Sire, daar kunt u toch uw <?=$euro?> voor gebruiken?"</p>
          <p>"<?=$persoon?>, je hebt helemaal gelijk! Wat zou ik doen as ik jou niet had"</p>
          <p>"<?=$vervelen?>, Sire."</p>
      </div>
    </main>
    <div id="madeby"><p>Deze website is gemaakt door Kevin Kraaijveld</p></div>
  </body>
</html>
