<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notasBimestre2 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Maria' => 10,
];


//var_dump(array_diff($notasBimestre1, $notasBimestre2)); 
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // Calcula diferença de arrays usando chaves para comparação 
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));