<?php
//ova metoda ima zadatak saznati što želiš i to pokrenuti
class App{
  public static function start(){
    //echo '<pre>';
    //print_r($_SERVER);
    //echo '</pre>';

    $ruta = Request::getRuta();

    Log::info($ruta);



    $djelovi = explode('/',substr($ruta,1));

    Log::info($djelovi);

    //idem razatnati kontroler

    $controller = 'index';

    if(!isset($djelovi[0]) || $djelovi[0] ===''){
      $controller='IndexController';
    } else {
      $controller = ucfirst($djelovi[0]) . 'Controller';
    }
     Log::info($controller);

     //idem razaznati metodu

     $metoda ='';
     if(!isset($djelovi[1]) || $djelovi[1]==''){
      $metoda='';
     } else {
      $metoda=$djelovi[1];
     }
     Log::info($metoda);

     if(!(class_exists($controller) && method_exists($controller,$metoda))){
      echo ' Ne postoji ' . $controller . '-&gt;' . $metoda;
      return;
      
     } 

     //izvedi ju
     $instanca = new $controller();
     $instanca->$metoda();
  }
}