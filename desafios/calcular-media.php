<?php


$array = [25, 34, 13, 89];


function exibirMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function calcularMedia($array) {
    $i = 0;
    foreach ($array as $numero) {
        $i += $numero;
    }
    return $i / count($array);
}

$media = calcularMedia($array);
exibirMensagem("Média dos números é: " . $media);

