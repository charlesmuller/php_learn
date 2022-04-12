<?php

$idade = 16;
$numerodepessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou
a partir de 16 anos acompanhado.".PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
}else if ($idade >= 16 && $numerodepessoas >= 2){
        echo "Você tem $idade anos e está acompanhado(a), 
        então pode entrar";
    } else {
        echo "Você tem $idade anos . Não pode entrar.";
}