<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo mb_convert_encoding($linha[0], 'Windows-1252', 'UTF-8', ) . PHP_EOL;
}

/*

$arquivo = new SplFileObject('cursos.csv');

foreach ($arquivo as $linha) {
    echo $linha;
}

*/

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getATime());

echo $date->format('d/m/Y');