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

echo 'Vinicius está na lista?' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas)); // retorna true ou false informando se a chave do array existe no array

echo 'Vinicius fez a prova?' . PHP_EOL;
var_dump(isset($notas['Vinicius'])); // retorna true ou false informando se o elemento tem valor setado e é diferente de nulo

echo 'Alguém tirou nota 10?' . PHP_EOL;
var_dump(in_array(10, $notas)); // retorna true ou false informando se o valor existe

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas); // retorna a chave do array que possui o valor passado no primeiro parametro da função