<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorBonificacoes;
use Alura\Banco\Modelo\{CPF, Funcionario};

$umFuncionario = new Funcionario(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    cargo:'Desenvolvedor',
    salario:1000
);

$umaFuncionaria = new Funcionario(
    'Patricia',
    new CPF('987.654.321-10'),
    cargo:'Gerente',
    salario:3000
);

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);

echo $controlador->recuperaTotal();