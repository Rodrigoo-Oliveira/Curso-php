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

var_dump($alunos2022);