<?php

/* solução para ler linha a linha

$arquivo = fopen(filename:'curso.txt', mode:'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

*/

$arquivo = fopen(filename:'curso.txt', mode:'r');

$tamanhoArquivo = filesize('curso.txt'); // passa o nome do arquivo('curso.txt') e não o arquivo aberto ($arquivo = fopen(filename:'curso.txt', mode:'r');)
$curso = fread($arquivo, $tamanhoArquivo);

echo $curso;

fclose($arquivo);
