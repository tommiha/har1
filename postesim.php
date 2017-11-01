<?php include "menu.php"; ?>
<h1>Post esimerkki</h1>
  <form action="postesim.php" method="post">
    <table border="1">
    <tr>
      <td><label for="en">Etunimi</label></td>
      <td><input type="text" id="en" name="en"></td>
    </tr>
    <tr>
      <td><label for="sn">Sukunimi</label></td>
      <td><input type="text" id="sn" name="sn"></td>
    </tr>
    </table>
    <input type="submit" name="btnSend" value="Lähetä">
  </form>
  <?php
    if(isset($_POST['btnSend'])){
      $etu=$_POST['en'];
      $suk=$_POST['sn'];
      echo 'Hei '.$etu.' '.$suk;
    }

   ?>

<?php include "footer.php"; ?>
