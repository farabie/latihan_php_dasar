<?php 

$name = "Farabie";
unset($name);

//Ini error karena variablenya sudah dihapus
// var_dump($name);

//Mengecek apakah variablenya sudah di set atau belum
var_dump(isset($name));

$age = 70;
//Ini true karena variablenya sudah di set
var_dump(isset($age));

?>