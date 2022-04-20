<?php

$carros = [
  'LMS-2232' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ], 
  'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
  'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach($carros as $placa => $carro){
    echo $placa . ': ' . 'Marca do carro: '. $carro['marca'] 
    . 'Modelo do carro: ' . $carro['modelo'] . PHP_EOL;
}