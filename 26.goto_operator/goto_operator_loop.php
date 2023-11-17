<?php 

$counter = 1;

while($counter <= 10) {
    echo "While Loop Ke-$counter" . PHP_EOL;
    $counter++;	
    if($counter == 10) {
        goto end;
    }
}

end:
echo "End Loop". PHP_EOL;

?>