<?php 

function foo() {
    echo "FOO" . PHP_EOL;
}

function hello() {
    echo "Hallo Dunia" . PHP_EOL;
}

$functionName = "foo";
$functionName();

//Jadi pada varibale function dia tidak masalah mau uppercase atau tidak
//atau huruf kecil semua bestpracticenya yaitu huruf kecil semua dan camelcase
$functionName = "Hello";
$functionName();


?>