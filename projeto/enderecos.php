<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petropolis',
    'bairro Qualquer',
    'Minha rua',
    '71B'
); 

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'   
);

echo $umEndereco->bairro; 

exit();
echo $umEndereco . PHP_EOL;
echo $outroEndereco;
