<?php 

$string1 = (string) "Abie";
$bool = (bool) true;
$int = (int) 10;
$float = (float) 10.21;
$array = (array) [1, 2, 4, 5];

function sayHello(string $name, $fillter)
{
    $finalName = call_user_func($fillter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

var_dump(is_string($string1));
var_dump(is_bool($bool));
var_dump(is_int($int));
var_dump(is_float($float));
var_dump(is_array($array)); 
// var_dump(is_callable(sayHello($string1, $bool)));

?>