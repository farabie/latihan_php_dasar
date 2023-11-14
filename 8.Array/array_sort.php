<?php

$kumpulanAcakAngka = [1, 3, 5, 2, 5, 6];
$kumpulanNamaAcak = array("Abie", "Luffy", "Zoro", "Sumi");

//Sorting secara ascending
sort($kumpulanAcakAngka);
var_dump($kumpulanAcakAngka);

//Sorting secara descending
rsort($kumpulanNamaAcak);
var_dump($kumpulanNamaAcak);

//Multi array
$multiname = [
    "mugiwara" => ["captain" => "Zoro", "swordman" => "luffy", "cook" => "Sanji"],
    "law" => ["captain" => "Traflgar law", "navigate" => "Bepo", "crew" => "Penguin"],
];

//ascending Assosiative Array
$weapon = [
    "sword" => "Samurai",
    "kunai" => "Zunai",
    "tisu" => "Abil",
]; 

asort($weapon);
var_dump($weapon);

//Descending Assosiative array
ksort($multiname['mugiwara']);
var_dump($multiname['mugiwara']);

//Descending sesuai dengan valuenya
arsort($multiname['mugiwara']);
var_dump($multiname['mugiwara']);

//Descending sesuai dengan keynya
krsort($multiname['law']);
var_dump($multiname['law']);