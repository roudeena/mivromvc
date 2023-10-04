<?php
// make constant paths for every folder
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CORE",APP.DS.'core');
define("CONFIG",APP.DS.'config');
define("CONTROLLERS",APP.DS.'controllers');
define("MODELS",APP.DS.'models');
define("VIEWS",APP.DS.'views');

// config 
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","store");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc.test/");

require_once ("../vendor/autoload.php");


// call app.php file
// require_once(CORE."/app.php");

// call all required files by autoload 
require_once ("../vendor/autoload.php");

// make object from app class in app.php with namespace of the file
$test = new MVC\core\app();