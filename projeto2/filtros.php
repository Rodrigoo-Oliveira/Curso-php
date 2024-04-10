<?php

$arquivoCursos = fopen(filename:'lista-cursos.txt', mode:'r');

stream_filter_append($arquivoCursos, filter_name:'string.toupper');

echo fread($arquivoCursos, filesize(filename:'lista-cursos.txt'));