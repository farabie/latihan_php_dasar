<?php 

$operator = ['isi'];

$default = $operator['isi'] ?? 'default';

echo $default . PHP_EOL; 

$variable = 'ags';
$nilaiDefault = $variable ?? 'default';

echo $nilaiDefault;

?>