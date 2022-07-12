<?php
$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];
//do maior para o menor
arsort($notas);
//arsort() mantem as chaves quando vai ordenar
//ksort() ordena pela ordem das chaves e o krsort para descrescente
var_dump($notas);

