<?php



$contasCorrentes = [

/*

    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    12345678911 => [
        'titular' => 'Rodrigo',
        'saldo' => 2500
    ],

    12345678912 => [
        'titular' => 'Beatriz',
        'saldo' => 5000
    ]
];


foreach($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}

*/


    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
