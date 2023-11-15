<?php

$gradeMahasiswa = 80;

if ($gradeMahasiswa >= 80 && $gradeMahasiswa <= 100) :
    echo "Nilai anda A" . PHP_EOL;
elseif ($gradeMahasiswa >= 70 && $gradeMahasiswa <= 79) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($gradeMahasiswa >= 60 && $gradeMahasiswa <= 69) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($gradeMahasiswa >= 50 && $gradeMahasiswa <= 59) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E". PHP_EOL;
endif;
