<?php

$nilai = 76;

$nilaiAnda = ($nilai >= 90 && $nilai <= 100) ? "Excellent"
    : (($nilai >= 80 && $nilai <= 89) ?
    "Great" : (($nilai >= 70 && $nilai < 79) ? 
    "Good" : (($nilai >= 60 && $nilai < 69) ?
    "Not Bad" : "Bad")));

echo $nilaiAnda . PHP_EOL;
