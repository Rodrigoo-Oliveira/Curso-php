<?php

/*  
Solução 1

Para ler linha a linha e está abordagem serve para ler arquivos grandes

$arquivo = fopen(filename:'lista-cursos.txt', mode:'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

*/

//Solução 2 
//Para ler arquivos pequenos usar está abordagem e serve para arquivos menor de 128megas

$arquivo = fopen(filename:'lista-cursos.txt', mode:'r');

$tamanhoArquivo = filesize('curso.txt'); // passa o nome do arquivo('curso.txt') e não o arquivo aberto ($arquivo = fopen(filename:'curso.txt', mode:'r');)
$curso = fread($arquivo, $tamanhoArquivo);

echo $curso;

fclose($arquivo);
