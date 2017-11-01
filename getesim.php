<?php include "menu.php"; ?>
<h1>Get esimerkki</h1>
  <form action="getesim.php" method="get">
    <label for="en">Etunimi</label>
    <input type="text" id="en" name="en">
    <br>
    <label for="sn">Sukunimi</label>
    <input type="text" id="sn" name="sn">
    <br>
    <input type="submit" name="btnSend" value="Lähetä">
  </form>
  <?php
    $btn=$_GET['btnSend'];
    if(isset($btn)){
      $etu=$_GET['en'];
      $suk=$_GET['sn'];
      echo 'Hei '.$etu.' '.$suk;
    }

   ?>

<?php include "footer.php"; ?>
