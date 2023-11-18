<?php 

$name = "Abie"; //Global scope

function sayName() {
    echo "Hello My Name {$GLOBALS['name']}" . PHP_EOL;
}

sayName();
?>