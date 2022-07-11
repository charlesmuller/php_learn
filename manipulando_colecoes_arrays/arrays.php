<?php
$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português por escrito é: $nomeNumero" . PHP_EOL;
}

$contador = 0;
foreach ($array as $numeral => $nomeNumero) {
    $contador ++;
}

echo "Total: $contador" . PHP_EOL;
echo "Total: " . count($array) . PHP_EOL;
echo "Total: " . sizeof($array) . PHP_EOL;