<?php

$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane',
];

//$alunos2022 = array_merge($alunos2021, $novosAlunos); 
$alunos2022 = [...$alunos2021, 'Rodrigo Oliveira', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); // Adicionando no final do array (adiiona vários elementos)
$alunos2022[] = 'Luiz'; // Adicionando no final de uma outra forma (adiciona 1 elemento)

array_unshift($alunos2022, 'Stephane', 'Rafaela'); // Adiciona no início do array

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);