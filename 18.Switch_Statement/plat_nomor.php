<?php

$platNomor = "BD";

switch ($platNomor) {
    case "BD":
        echo "Bengkulu";
        break;
    case "AA":
        echo "Kedu, Purworejo, Magelang";
        break;
    case "AB":
        echo "Yogyakarta";
        break;
    case "D":
        echo "Bandung";
        break;
    default:
        echo "Belum Tersedia plat tersebut";
        break;
}
