<?php
/*
$nota1 = 10;
$nota2 = 7.3;
$nota3 = 5;

$somaNotas = ($nota1 + $nota2 + $nota3) / 3;

echo $somaNotas;
*/

$notas = [10, 7.3, 5];
$cont = 0;
$quantNotas = count($notas);

for ($i=0; $i < $quantNotas; $i++) {
    $cont += $notas[$i]; 
}

$media = $cont / $quantNotas;

echo "Média das notas: " . $media;
