<?php

function isPalindrom($string)
{
    $string = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string)); // Hapus karakter non-alphanumeric dan ubah ke huruf kecil
    $reversedString = strrev($string); // Balik string

    return $string === $reversedString;
}

// Contoh penggunaan
$string1 = "level";
$string2 = "Hello, World!";

echo "$string1 adalah palindrom: " . (isPalindrom($string1) ? 'true' : 'false') . "<br>";
echo "$string2 adalah palindrom: " . (isPalindrom($string2) ? 'true' : 'false') . "<br>";
