<?php

$nilai = "a";

switch ($nilai):
    case "A":
    case "a":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "b":
    case "C":
    case "c":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
    case "d":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        break;
endswitch;
