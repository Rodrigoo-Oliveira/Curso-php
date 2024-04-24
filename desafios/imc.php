<?php

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

