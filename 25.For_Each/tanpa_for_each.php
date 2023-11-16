<?php 
$i = 0;
$array = array("Abie", 10, true);

for($i; $i < count($array); $i++) {
    echo "Hello $array[$i]" . PHP_EOL;
}

while($i < count($array)) {
    echo "Hello ". $array[$i] . PHP_EOL;
    $i++;
}

?>