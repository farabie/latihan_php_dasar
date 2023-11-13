<?php 

$hello = "Apa kabar";

//Petik dunia dia bisa menambahkan parameter
echo "Hi dunia $hello" . PHP_EOL;

//Petik satu dia tidak bisa menambahkan variable
echo 'Hello Duni $hello' . PHP_EOL;

//Jika dia petik 1 maka bisa menambahkan ini
echo 'Helo dunia ' . $hello . PHP_EOL;
?>