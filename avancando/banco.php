<?php
## exibeMensagem() é a criação de uma subrotina

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar)
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.400.789-11'] = sacar($contasCorrentes['123.400.789-11'], 500);


## para imprimir os indices que são os CPF dessas contas
## acima é feito o foreach para pode buscar dentro do array
foreach ($contasCorrentes as $cpf => $conta ){
    echo $cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}





echo "teste";