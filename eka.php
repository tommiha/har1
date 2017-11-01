<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ekasivu</title>
  </head>
  <body>
    <h1>Assosiatiivinen array</h1>
    <p>Seuraava taulukko on luotu php:llä</p>

    <?php
    //Alla siis assosiatiivinen array
    $nimet=array(
      array("Etunimi"=>'Ville',"Sukunimi"=>'Virtanen'),
      array("Etunimi"=>'Kalle',"Sukunimi"=>'Järvi'),
      array("Etunimi"=>'Liisa',"Sukunimi"=>'Virta'),
      array("Etunimi"=>'Maija',"Sukunimi"=>'Joki')
    );
    foreach ($nimet as $rivi => $value) {
      echo $rivi['Etunimi'];
    }
     ?>
  </body>
</html>
