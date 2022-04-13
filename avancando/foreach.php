<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Charles', 
        'saldo' => 1000
    ], 
    '123.400.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '125.556.789-88' => [
        'titular' => 'João',
        'saldo' => 250
    ]
];

$contasCorrentes['123.999.000-80'] = [
    'titular' => 'José',
    'saldo' => 500
];


## para imprimir os indices que são os CPF dessas contas
## acima é feito o foreach para pode buscar dentro do array
foreach ($contasCorrentes as $cpf => $conta ){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}