<?php

$luasSegitiga = function ($alas, $tinggi) {
    return 0.5 * $alas / $tinggi;
};

$hasilLuas = $luasSegitiga(10,20);
echo $hasilLuas;


?>