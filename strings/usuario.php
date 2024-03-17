<?php

$email = 'vinícius@alura.com.br';
$senha = 'áéíóú';

/*
Forma que não devemos fazer (modo de mostrar que string pode ser acessada como ARRAY)

$cont = 0;
for ($i = 0; $i < 3; $i++) {    
    echo $senha[$i] . PHP_EOL; 
    $cont++;
}
*/

echo mb_strlen($senha) . PHP_EOL;

if (strlen($senha) < 8) {    //strlen -> Retorna o tamanho da string em bytes e não em caracteres
    echo 'Senha insegura' . PHP_EOL;
}


$posicao = strpos($email, '@');

$usuario = substr($email, 0, $posicao); // substr -> Retorna parte de uma string 

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicao + 1) . PHP_EOL;

