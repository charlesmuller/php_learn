<?php
$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português por escrito é: $nomeNumero" . PHP_EOL;
}