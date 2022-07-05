<?php

$idadeList = [21, 23, 19, 25, 30, 18, 41];

list($idadeCharles, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}