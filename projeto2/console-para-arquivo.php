<?php

echo "Informe o nome do curso " . PHP_EOL;
$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);