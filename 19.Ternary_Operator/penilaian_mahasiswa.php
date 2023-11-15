<?php

$nilaiMahasiswa = 4;

$nilaiAnda = ($nilaiMahasiswa >= 80 && $nilaiMahasiswa <= 100) ? "A" 
: (($nilaiMahasiswa >= 70 && $nilaiMahasiswa <= 79) ? "B" : 
(($nilaiMahasiswa >= 60 && $nilaiMahasiswa < 69) ? "C" :
(($nilaiMahasiswa >= 50 && $nilaiMahasiswa < 59) ? "D" : "E")));

echo $nilaiAnda . PHP_EOL;
