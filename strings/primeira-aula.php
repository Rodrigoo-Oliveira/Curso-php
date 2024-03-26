<?php

$nome = 'Vinicius Santos';

$ehDaMinhaFamilia = str_contains($nome, 'Dias'); // Determina se uma string contém uma substring fornecida

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}