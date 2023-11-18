<?php 

function loop(int $value): void {
    if($value == 0) {
       echo "Selesai" . PHP_EOL;
    }else {
        echo "Loop-$value" . PHP_EOL;
        loop($value -1);
    }
}

loop(50000000);

?>