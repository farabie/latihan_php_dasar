<?php 
//Fungsi Operator dinamis
function calculate($angka1, $angka2, $operator) {
    $operation = function($a, $b) use ($operator) {
        switch($operator) {
            case "+":
                return $a + $b;
            case "-":
                return $a - $b;
            case "*":
                return $a * $b;
            case "/":
                //Periksa agar tidak terjadi pembagian oleh 0
                return $b != 0 ? $a / $b  : "Error: Division by zero";
            default:
            return "Error: Invalid Operator";

        }
    };

    //Panggil fungsi operasi matematika
    return $operation($angka1, $angka2);
}


$result = calculate(10, 20 , "+");
echo "Hasil Penjumlahan: $result" . PHP_EOL;

$result = calculate(60, 20, "-");
echo "Hasil Pengurangan: $result" . PHP_EOL;

$result = calculate(20, 20, "*");
echo "Hasil Perkalian: $result" . PHP_EOL;

$result = calculate(20, 50, "/");
echo "Hasil Pembagian: $result" . PHP_EOL;

//Error jika tidak operasinya
$result = calculate(20, 50, "%");
echo "Hasil Pembagian: $result" . PHP_EOL;
?>