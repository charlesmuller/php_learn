<?php
## exibeMensagem() é a criação de uma subrotina
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
     }else {
        exibeMensagem("Depósitos precisam ser positivos");
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

$contasCorrentes['125.556.789-88'] = depositar($contasCorrentes['125.556.789-88'], 500);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 200);
$contasCorrentes['123.400.789-11'] = sacar($contasCorrentes['123.400.789-11'], 200);


## para imprimir os indices que são os CPF dessas contas
## acima é feito o foreach para pode buscar dentro do array
foreach ($contasCorrentes as $cpf => $conta ){
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}