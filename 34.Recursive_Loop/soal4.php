<?php
//Reverse String
function reverseString($str)
{
    if (strlen($str) <= 1) {
        return $str;
    } else {
        return reverseString(substr($str, 1)) . $str[0];
    }
}

// Contoh penggunaan
$inputString = "Hello, World!";
echo "String asli: $inputString <br>";
echo "String setelah dibalik: " . reverseString($inputString);

?>