<?php

$meusCursos = file('lista-cursos.txt');

$outrosCursos = file('cursos-php.txt');

$arquivosCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];

    fputcsv($arquivosCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Não'];

    fputcsv($arquivosCsv, $linha, ';');
}

fclose($arquivosCsv);