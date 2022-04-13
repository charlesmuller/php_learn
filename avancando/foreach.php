<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Charles', 
        'saldo' => 1000
    ], 
    12340078911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12555678988 => [
        'titular' => 'João',
        'saldo' => 250
    ]
];
## para imprimir os indices que são os CPF dessas contas
## acima é feito o foreach para pode buscar dentro do array
foreach ($contasCorrentes as $cpf => $conta ){
    echo $cpf . PHP_EOL;
}