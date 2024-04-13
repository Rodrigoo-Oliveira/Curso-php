<?php

$meusCursos = file('lista-cursos.txt');

$outrosCursos = file('cursos-php.txt');

$arquivosCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), 'Sim'];

    fputcsv($arquivosCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), 'Não'];

    fputcsv($arquivosCsv, $linha, ';');
}

fclose($arquivosCsv);