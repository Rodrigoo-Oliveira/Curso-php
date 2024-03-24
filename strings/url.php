<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {  //str_starts_with -> verifica se uma string começa com uma substring fornecida
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

if (str_ends_with($url, '.br')) { //str_ends_with -> verifica se uma string termina com uma substring fornecida
    echo 'É um domínio do Brasil';
} else {
    echo 'Não é um domínio do Brasil';
}