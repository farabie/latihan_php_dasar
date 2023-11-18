<?php 

function factorial(int $n): int {
    if($n == 1) {
        return 1;
    }else {
        return $n *  factorial($n - 1);
    }
}

$fatorial = factorial(5);

echo $fatorial;
?>