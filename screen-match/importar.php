<?php

$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoArquivoFilme = file_get_contents($caminhoArquivo);
$fime = json_decode($conteudoArquivoFilme, true);

var_dump($filme);