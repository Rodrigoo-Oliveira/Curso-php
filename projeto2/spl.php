<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
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