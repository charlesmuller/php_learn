<?php

$alunos2022 = [
    'Ana',
    'João',
    'Maria',
    'Roberto',
    'Vinicius',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

//$alunos2022 = array_merge($alunos2022, $novosAlunos);
$alunos2022 = [...$alunos2022, "Teste de inserção", ...$novosAlunos];

var_dump($alunos2022);


