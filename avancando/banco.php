<?php
## exibeMensagem() é a criação de uma subrotina

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

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
    ]
];
if(500 > $contasCorrentes ['123.456.789-10']['saldo']){
    exibeMensagem("Você não pode sacar");
}else{
    $contasCorrentes ['123.456.789-10']['saldo'] -= 500;
}

if(500 > $contasCorrentes ['123.400.789-11']['saldo']){
    exibeMensagem("Você não pode sacar");
}else{
    $contasCorrentes ['123.400.789-11']['saldo'] -= 500;
}
## para imprimir os indices que são os CPF dessas contas
## acima é feito o foreach para pode buscar dentro do array
foreach ($contasCorrentes as $cpf => $conta ){
    echo $cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}