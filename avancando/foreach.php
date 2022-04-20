<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Fofão', 
        'saldo' => 1000
    ], 
    '123.400.789-11' => [
        'titular' => 'Pelé',
        'saldo' => 10000
    ], 
    '125.556.789-88' => [
        'titular' => 'Didi',
        'saldo' => 250
    ],
    '123.999.000-80' => [
        'titular' => 'Xuxa',
        'saldo' => 500
    ]
];

## para imprimir os indices que são os CPF dessas contas
## acima é feito o foreach para pode buscar dentro do array
foreach ($contasCorrentes as $cpf => $conta ){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}