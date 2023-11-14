<?php 
$a = true;
$b = false;

//True jika $a dan $b keduanya true AND(&&)
var_dump($a && $b);
var_dump($a AND $b);

//True jika $a dan $b salah satu true OR(||)
var_dump($a || $b);
var_dump($a OR $b);

//True jika $a bernilai false NOT
var_dump(!$a);

//True jika $a dan $b salah satu true, tapi tidak keduanya
var_dump($a xor $b);

?>