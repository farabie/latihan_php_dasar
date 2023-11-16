<?php
//Menampilkan nama hari jika ada hari kamis maka continue

$days = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

foreach ($days as $day) {
    if ($day == "Kamis") {
        continue;
    }
    echo "Nama-Nama Hari: " . $day . PHP_EOL;
}
