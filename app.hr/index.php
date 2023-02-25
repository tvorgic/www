<?php


//ova datoteka će definirati temeljne preduvjete
//napraviti autoloading

define('BP',__DIR__ . DIRECTORY_SEPARATOR);

define('BP_APP', BP . 'app' . DIRECTORY_SEPARATOR);

//samo za model core i controller

$zaAutoload=[
  BP_APP . 'controller',
  BP_APP . 'core',
  BP_APP . 'model'
];

//view ne ide u autoload jer su u njem phtml datoteke