<?php

$peso = 80;
$altura = 1.80;

$result = $peso / ($altura * $altura);

echo "O IMC é: $result. Você está ";
if ($result < 18.5){
    echo "abaixo";
}elseif($result < 25){
    echo "dentro";
}else{
    echo "acima";
}
echo " do recomendado.";