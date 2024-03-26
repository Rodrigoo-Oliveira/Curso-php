<?php

$carros = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'   
    ],
    
    'KLM-1324' => [
        'marca' => 'GM',
        'modelo' => 'Equinox'
    ],
];


foreach ($carros as $placa => $carro) {
    echo $placa. ': ' . $carro['modelo'] . PHP_EOL;
}