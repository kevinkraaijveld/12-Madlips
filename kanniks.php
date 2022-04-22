<?php
  $kunnen=$_POST['kunnen'];
  $opschieten=$_POST['opschieten'];
  $getal=$_POST['getal'];
  $vakantie=$_POST['vakantie'];
  $besteschap=$_POST['besteschap'];
  $slechteschap=$_POST['slechteschap'];
  $ergste=$_POST['ergste'];
?>
<html>
  <head>
    <title>Mad Lips - onkunde</title>
    <meta charset="utf-8">
  	<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <header>
          <h1>Mad lips</h1>
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
      <h2>Onkunde</h2>
      <div id="text">
        <P>Er zijn veel mensen die niet kunnen <?=$kunnen?>. Neem nou <?=$opschieten?>. Zelfs met behulp van een <?=$vakantie?> of zelfs <?=$getal?> kan <?=$opschieten?> niet <?=$kunnen?>. Dat heeft niet te maken met een gebrek aan <?=$besteschap?>, maar een te veel aan <?=$slechteschap?>. Te veel <?=$slechteschap?> leidt tot <?=$ergste?> en dat is niet goed als je wilt <?=$kunnen?>. Helaas voor <?=$opschieten?>.</p>
      </div>
    </main>
    <div id="madeby"><p>Deze website is gemaakt door Kevin Kraaijveld</p></div>
  </body>
</html>
