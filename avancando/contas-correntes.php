<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Rodrigo',
    'saldo' => 2500
];

$conta3 = [
    'titular' => 'Beatriz',
    'saldo' => 5000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['saldo'] . PHP_EOL;
}