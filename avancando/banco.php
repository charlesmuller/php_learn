<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria', 
        'saldo' => 10000
    ], 
    '123.400.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '125.556.789-88' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ],
];

$contasCorrentes['125.556.789-88'] = depositar($contasCorrentes['125.556.789-88'], 500);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 200);

$contasCorrentes['123.400.789-11'] = sacar($contasCorrentes['123.400.789-11'], 200);

titularLetrasMaiusculas($contasCorrentes['125.556.789-88']);

## para imprimir os indices que são os CPF dessas contas
## acima é feito o foreach para pode buscar dentro do array
foreach ($contasCorrentes as $cpf => $conta ){
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}