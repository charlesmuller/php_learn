<?php

$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

var_dump(array_diff($notasBimestre1, $notasBimestre2)); //retorna um novo array com todas as notas/valores que estão no bimestre 1 que não estão no bimestre 2

var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); //retorna um novo array com todas as chaves que estão no bimestre 1 que não estão no bimestre 2

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); //compara os dois arrays e retorna os elementos (tanto chave quanto valor) e retorna quem não está na no primeiro array

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2); //compara os dois arrays e joga na variável
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos)); //Troca as chaves do array pelos valores dos arrays
var_dump(array_flip($alunosFaltantes)); // Faz a mesma coisa do de cima
