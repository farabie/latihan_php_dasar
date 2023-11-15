<?php 

$umurSaatIni = 23;

if($umurSaatIni < 18) {
    echo "Remaja" . PHP_EOL;
}else if($umurSaatIni >= 18 && $umurSaatIni <= 35) {
    echo "Dewasa" . PHP_EOL;
}else {
    echo "Lansia" . PHP_EOL;
}

?>