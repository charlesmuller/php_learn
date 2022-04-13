<?php

$idadeList = [21, 20, 19, 25, 30, 18, 42, 50, 77];

## Mostra lista do fim para o início
echo "Lista Decrescente" . PHP_EOL;
for ($i = 8; $i > 0; $i--){
    echo $idadeList[$i]. PHP_EOL;
}

## Mostra lista do inicio para o fim
echo "Lista Crescente" . PHP_EOL;
for ($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}

## Mostra as idade com números impares
echo "Idades Impares" . PHP_EOL;
for ($i = 0; $i < count($idadeList); $i++){
    $aux = $idadeList[$i];

    if($aux % 2 != 0){
        echo $aux . PHP_EOL;
    }
}

## Mostra as idade com números pares
echo "Idades Pares" . PHP_EOL;
for ($i = 0; $i < count($idadeList); $i++){
    $aux = $idadeList[$i];

    if($aux % 2 == 0){
        echo $aux . PHP_EOL;
    }
}
