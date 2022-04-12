<?php

$idadeList = [21, 20, 19, 25, 30, 18, 42];
$aux = 0;
echo "Lista Decrescente" . PHP_EOL;
for ($i = 6; $i > 0; $i--){
    echo $idadeList[$i]. PHP_EOL;
}
echo "Lista Crescente" . PHP_EOL;
for ($i = 0; $i <= 6; $i++){
    echo $idadeList[$i] . PHP_EOL;
}
echo "Idades Impares" . PHP_EOL;
for ($i = 0; $i <= 6; $i++){
    $aux = $idadeList[$i];

    if($aux % 2 != 0){
        echo $aux . PHP_EOL;
    }
}

echo "Idades Pares" . PHP_EOL;
for ($i = 0; $i <= 6; $i++){
    $aux = $idadeList[$i];

    if($aux % 2 == 0){
        echo $aux . PHP_EOL;
    }
}