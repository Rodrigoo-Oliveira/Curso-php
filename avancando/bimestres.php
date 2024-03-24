<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 10,
];

//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
//var_dump(array_diff($notasBimestre1, $notasBimestre2)); 
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2); // Calcula diferença de arrays usando chaves para comparação 
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
