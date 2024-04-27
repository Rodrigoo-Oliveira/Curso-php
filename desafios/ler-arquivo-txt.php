<?php

$teste = __DIR__ . '/Teste.txt';

$conteudo = fopen($teste, 'r');

$ler = fgets($conteudo);

echo $ler;

fclose($conteudo);