<?php 
/* 
    Callback adalah sebuah function yang memanggila function
    sesuai dengan yang diberikan di argument
    bisa menggunakan call_user_func(callable, arguments)
*/

function sayHello(string $name, $fillter) {
    $finalName = call_user_func($fillter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Abie", function ($name) {return strtoupper($name);});
sayHello("Farabie", fn ($name) => strtoupper($name));
sayHello("Farabie", fn($name) => $name );
sayHello("Abie", "strtoupper");
sayHello("Abie", "strtolower");

?>