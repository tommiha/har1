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
    //print_r tulostaa koko taulukon
    //print_r($nimet);
    //ensimmäinen Etunimi
    echo 'Ensimmäinen etunimi on '.$nimet[0]['Etunimi'].'<br>';
    echo 'Toinen etunimi on '.$nimet[1]['Etunimi'].'<br>';
    ?>
    <h2>Koko taulukko</h2>
    <table border="1">
      <tr><th>Etunimi</th><th>Sukunimi</th></tr>
      <tr><td>Aino</td><td>Aho</td></tr>
      <?php
      foreach ($nimet as $rivi) {
        echo '<tr><td>'.$rivi['Etunimi'].'</td><td>'.$rivi['Sukunimi'].'</td></tr>';
      }
       ?>
    </table>
  </body>
</html>
