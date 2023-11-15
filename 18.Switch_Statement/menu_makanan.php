<?php

$menuMakanan = "Donat";

switch ($menuMakanan) {
    case "Pizza":
        echo "Anda memilih Pizza";
        break;
    case "Donat":
        echo "Anda memilih Ace";
        break;
    case "Keju":
        echo "Anda memilih Keju";
        break;
    case "Sayur Asam":
        echo "Anda memilih Sayur Asam";
        break;
    default:
        echo "Menu Belum Tersedia";
        break;
}
