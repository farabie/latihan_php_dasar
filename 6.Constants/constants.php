<?php 

//define(name, value, case-insentive)
//Tetapi di php 8.0 hanya menerima false

define("APP_NAME", "Kosanku Santuy");
define("APP_VERSION", "1.0.0");
//Deprecative untuk php 8.0
// define("KAOS_KU", "Blacky", true);

echo APP_NAME . PHP_EOL;
echo APP_NAME . "Version: " . APP_VERSION . PHP_EOL;

const MYMOUSE = "Fantech";
echo MYMOUSE;


?>