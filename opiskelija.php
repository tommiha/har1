<?php

class Opiskelija
{
  private $nimet=array(
    array("Etunimi"=>'Ville',"Sukunimi"=>'Virtanen'),
    array("Etunimi"=>'Kalle',"Sukunimi"=>'Järvi'),
    array("Etunimi"=>'Liisa',"Sukunimi"=>'Virta'),
    array("Etunimi"=>'Maija',"Sukunimi"=>'Joki')
  );
  public function get_nimet(){
    return $this->nimet;
  }

}
 ?>
