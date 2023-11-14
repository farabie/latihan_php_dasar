<?php
//Incremement
$counter = 10;
var_dump(++$counter);

//Decrement
$level = 12;
var_dump(--$level);

//Increment dalam expresi
$x = 10;
$z = $x++;
var_dump($x);

//Decrement dalam expresi
$y = 10;
$m = $x--;
var_dump($y);

//Penggunaan Increment dan Decrement Bersamaan
$a = 10;
$b = 11;

$c = $a++ + $b--;
var_dump($a + $b);