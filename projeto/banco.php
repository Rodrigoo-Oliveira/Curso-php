<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$vinicius = new Titular(cpf:'123.456.789-10', nome:'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCPFTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(cpf:'698.549.548-10', nome:'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular('123', 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();