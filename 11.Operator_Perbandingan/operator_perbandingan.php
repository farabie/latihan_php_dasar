<?php 

$number1 = 10;
$number2 = "10";
$number3 = 10;

//Operator sama dengan
var_dump($number1 == $number2);

//Operator identik harus memiliki data yang sama dan type data sama
var_dump($number1 === $number2);

//Operator tidak sama dengan setelah konversi tipe data
var_dump($number1 != $number2);

//Operator tidak sama dengan setelah konversi tipe data
var_dump($number1 <> $number2);

//Operator identik harus memiliki data yang tidak sama dan type data sama
var_dump($number1 !== $number2);

//Operator kurang dari
var_dump($number1 < $number3);

//Operator kurang dari sama dengan
var_dump($number1 <= $number3);

//Operator lebih dari 
var_dump($number1 > $number3);

//Operator lebih dari sama dengan
var_dump($number1 >= $number3);
?>