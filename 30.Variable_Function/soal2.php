<?php
//Fungsi-fungsi untuk menghitung luas beberapa bentuk geometri

function hitungLuasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}

function hitungLuasLingkaran($jariJari)
{
    return pi() * $jariJari * $jariJari;
}

function hitungLuasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

//Fungsi untuk memilih fungsi perhitungan berdasarkan kriteria
function pilihFungsiPerhitungan($kriteria)
{
    switch ($kriteria) {
        case "persegi_panjang":
            return "hitungLuasPersegiPanjang";
        case "lingkaran":
            return "hitungLuasLingkaran";
        case "segitiga":
            return "hitungLuasSegitiga";
        default:
        return "Belum ada luas";
    }
}

$kriteria = 'persegi_panjang';
$fungsiPerhitungan = pilihFungsiPerhitungan($kriteria);

$luasLingkaran = $fungsiPerhitungan(5, 5);
var_dump($luasLingkaran);
