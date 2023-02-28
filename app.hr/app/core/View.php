<?php
class View 
{

  private $predlozak;

  public function __construct($predlozak= 'predlozak')
  {

    $this->predlozak = $predlozak;
    
  }

  public function render($phtmlStranica,$parametri=[])
  {
    $viewDatoteka = BP_APP .'view' . DIRECTORY_SEPARATOR . $phtmlStranica . '.phtml';
    ob_start();
    extract($parametri);
    if(file_exists($viewDatoteka)){
      include_once $viewDatoteka;
    } else {
      include_once  BP_APP .'view' . DIRECTORY_SEPARATOR . 'errorViewDatoteka.phtml';
    }
  }
}