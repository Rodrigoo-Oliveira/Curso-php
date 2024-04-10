<?php

$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);


/*
fwrite(STDOUT, 'Olá Mundo!');

*/

/*

$tela = fopen('php://stdout', 'w');

fwrite($tela, 'Olá Mundo!');

*/