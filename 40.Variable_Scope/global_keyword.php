<?php 

$name = "Farabie";
$age = 20;

function sayHi() {
    global $name,  $age;
    echo "My name is $name and My Age $age";
}

sayHi();

?>