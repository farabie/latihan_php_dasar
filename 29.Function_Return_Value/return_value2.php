<?php 

function getValue(int $value) {
    if($value >= 80) {
        return 'A';
    }else if($value >= 60 && $value <= 79){
        return 'B';
    } else if ($value >= 50 && $value <= 59) {
        return 'C';
    } else if ($value >= 30 && $value <= 49) {
        return 'D';
    }else {
        return 'E';
    }
}

$nilai = getValue(76);
var_dump($nilai);

?>