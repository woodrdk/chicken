
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

// define a default route
$f3 -> route('GET /', function(){
    $view = new Template();
    echo $view->render('views/allAboutChickens.html');

});
// Run Fat Free
$f3 -> run();


