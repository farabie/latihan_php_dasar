<?php

//Buatlah foreach dengan array di dalam array

$karyawans = [
    "name" => "Muhammad Farabie",
    "email" => "abie12@gmail.com",
    "role_id" => "abie123",
    "nik" => "1234",
    "adress" => [
        "office" => "Jalan Rawa Bangun",
        "house" => "Perumahan Griya Mentari No 41",
    ]
];

foreach ($karyawans as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $subKey => $subValue) {
            echo "$subKey : $subValue" . PHP_EOL;
        }
    } else {
        echo "$key: $value" . PHP_EOL;
    }
}
