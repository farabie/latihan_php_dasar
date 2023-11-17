<?php 

function info_orang(string $name, int $age = 20, string $hobby = "No Hobby"){
    echo "Hello My Name $name, My Age $age, My Hobby $hobby" . PHP_EOL;
}

info_orang("Abie");
info_orang("Abie", 23);
info_orang("Abie", "Badminton");
?>