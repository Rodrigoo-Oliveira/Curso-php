<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta(cpfTitular:'123.456.789-10', nomeTitular:'Vinicius Dias');
var_dump($primeiraConta);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCPFTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

