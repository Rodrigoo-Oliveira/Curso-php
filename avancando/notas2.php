<?php


$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

/*
sort($notas);  // Ordena no formato crescente
var_dump($notas);
*/

/*
arsort($notas);  // Ordena no formato decrescente
var_dump($notas);
*/

/*
ksort($notas);  // Ordena no formato crescente das chaves( No caso ordem alfabética)
var_dump($notas);
*/

krsort($notas);  // Ordena no formato decrescente das chaves( No caso ordem alfabética)
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

/*
foreach ($notas as $aluno => $notas) {
    if ($aluno === 'Vinicius') {
        return true;
    }
}
*/
echo 'Ana fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10,$notas));

echo 'Quem tirou 10?' .PHP_EOL;
echo array_search(10, $notas);
