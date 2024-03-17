<?php

$email = 'ana@alura.com.br';

$posicao = strpos($email, '@');

echo substr($email, 0, $posicao) . PHP_EOL; // substr -> Retorna parte de uma string 
echo substr($email, $posicao + 1) . PHP_EOL;

