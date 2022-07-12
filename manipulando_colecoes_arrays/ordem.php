<?php
$notas = [
    10,
    8,
    9,
    7
];

//$notasOrdenadas = $notas;
//sort($notasOrdenadas);
//
//echo "Desordenadas: ";
//var_dump($notas);
//
//echo "Ordenadas: ";
//var_dump($notasOrdenadas);

$notas2 = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'João',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

//function ordenaNotas(array $nota1, array $nota2): int
//{
//    if ($nota1['nota'] > $nota2['nota']){
//        return -1;
//    }
//
//    if ($nota2['nota'] > $nota1['nota']){
//        return 1;
//    }
//    return 0;
//}

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota'];
    //para ordem decrescente apenas alterar a posição das variáveis $nota1 e $nota2 uma pela outra
}

usort ($notas2, 'ordenaNotas');
var_dump($notas2);

if (is_array($notas2)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));