<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorBonificacoes;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF(numero:'123.456.789-10'),
    salario:1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente( 
    'Patricia',
    new CPF(numero:'987.654.321-10'),
    salario:3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF(numero:'123.951.789-11'),
    salario:5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF(numero:'456.987.231-11'),
    salario:1500
);


$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);


echo $controlador->recuperaTotal();