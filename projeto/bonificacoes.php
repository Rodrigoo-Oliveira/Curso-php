<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente, Desenvolvedor};
use Alura\Banco\Service\ControladorBonificacoes;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    cargo:'Desenvolvedor',
    salario:1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente( 
    'Patricia',
    new CPF('987.654.321-10'),
    cargo:'Gerente',
    salario:3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.951.789-11'),
    cargo:'Diretor',
    salario:5000
);


$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umDiretor);


echo $controlador->recuperaTotal();