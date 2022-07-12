<?php
$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => null,
];
//do maior para o menor
//arsort($notas);


//arsort($notas)  //mantem as chaves quando vai ordenar
//ksort($notas) //ordena pela ordem das chaves e o krsort para descrescente
var_dump($notas);

var_dump(array_is_list($notas)); // retorna true ou false informando se a variável é array

var_dump(array_key_exists('Vinicius', $notas)); // retorna true ou false informando se a key existe no array

var_dump(isset($notas['Vinicius'])); // retorna true ou false informando se o elemento tem valor setado

