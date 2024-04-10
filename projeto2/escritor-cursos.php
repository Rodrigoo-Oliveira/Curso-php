<?php

/*
$arquivo = fopen(filename:'cursos-php.txt', mode:'a+'); // Modo de abertura 'w' sobrescreve o texto 
                                                        // Modo de abertura 'a' coloca o cursos no final do arquivo
$curso = "\nDesign Patterns PHP II: Boas práticas de progrmação";

fwrite($arquivo, $curso);

fclose($arquivo);
*/

$curso = "\nDesign Patterns PHP II: Boas práticas de progrmação";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);