<?php 

$usia = 23;

$categoryUsia = ($usia <= 18) ? "Remaja" : (($usia >= 18 && $usia <= 35) ? "Dewasa" : "Lansia");

echo $categoryUsia . PHP_EOL;

?>