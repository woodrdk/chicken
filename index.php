
<?php
/*
  * Rob Wood
  * 1/16/2020
  * In class project
  * http://rwood.greenriverdev.com/328/chicken/index.php
  * https://github.com/woodrdk/chicken
  */

ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require('vendor/autoload.php');

// Create an instance of the base class
$f3 = Base::instance();
// instantiate a controller object
$controller = new ChickenController($f3);

// define a default route
$f3 -> route('GET /', function(){
    global $controller;
    $controller->home();

    //$GLOBALS['controller']->home();
});


$f3 -> route('GET /eggs', function(){
    global $controller;
    $controller->eggs();
});
// Run Fat Free
$f3 -> run();


