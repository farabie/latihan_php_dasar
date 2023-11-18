<?php 
//Anonymous Function Sebagi Argument

function sayGoodbye(string $message, $filter) {
    $finalName = $filter($message);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodbye("Abie", function(string $name) {
    return strtoupper($name);
});


?>