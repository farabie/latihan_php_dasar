<?php
$uangSaatIni = 100000;
$beliAyam = 20000;
$beliBubur = 12000;
$dapatDuitDijalan = 10000;
$dikali = 2;
$dibagi = 5;
$modulo = 10;

echo "Setelah beli ayam uang saat ini: " . ($uangSaatIni -= $beliAyam) . PHP_EOL;
echo ($uangSaatIni -= $beliBubur) . PHP_EOL;
echo ($uangSaatIni += $dapatDuitDijalan) . PHP_EOL;
echo ($uangSaatIni *= $dikali) . PHP_EOL;
echo ($uangSaatIni /= $dibagi) . PHP_EOL;
echo ($uangSaatIni /= $modulo) . PHP_EOL;