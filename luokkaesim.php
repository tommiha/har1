<?php include "menu.php"; ?>
  <h1>Php class esimerkki</h1>
  Opiskelijat ovat:<br>
    <?php
    include "opiskelija.php";
    $opiskelijat=new Opiskelija();

    $nimet=$opiskelijat->get_nimet();

    foreach ($nimet as $rivi) {
      echo '<tr><td>'.$rivi['Etunimi'].'</td><td>'.$rivi['Sukunimi'].'</td></tr>';
    }
    ?>
<?php include "footer.php"; ?>
