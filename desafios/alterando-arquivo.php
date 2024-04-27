<?php

$frase = "\nPHP é incrível";

$arquivo = fopen('Teste.txt', 'a');

fwrite($arquivo, $frase);

fclose($arquivo);

echo "Frase acrescentada com sucesso!";
