<?php 

function sayHello($firstName = "Abie", $lastName) {
    echo "Hello $firstName $lastName". PHP_EOL;
}

//Disini error karena yang ada default parameter itu firstName saya bukan yang lastName
// sayHello("Abie");
//Jika mau tidak error maka harus diisi semua 2 parameternya
sayHello("Muhammad", "Farabie");


?>