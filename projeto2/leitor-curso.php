<?php

$arquivo = fopen(filename:'curso.txt', mode:'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

fclose($arquivo);