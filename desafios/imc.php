<?php

/*
$peso = 100;
$altura = 1.84;

$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC" . PHP_EOL;

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif  ($imc >= 18.5 && $imc < 24.9) {
    echo "Peso Normal";
} elseif ($imc >= 25 && $peso < 30) {
    echo "Excesso de peso";
} else {
    echo "Obesidade";
}
*/

function imc(float $altura, float $peso) {

    $imc = $peso / $altura ** 2;

    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif  ($imc >= 18.5 && $imc < 24.9) {
        return "Peso Normal";
    } elseif ($imc >= 25 && $imc < 30) {
        return "Excesso de peso";
    } else {
        return "Obesidade";
    }
}

$resultadoIMC = imc(1.84, 102);
echo "Seu IMC é: " . $resultadoIMC;
