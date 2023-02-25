<?php

class Osoba{

  private $ime;
  public function __construct(){
    echo 'Helo from Osoba constructor', '<br>';
    $this->ime='Pero';
  }

  public function getIme()
  {
    return $this->ime;
  }
}