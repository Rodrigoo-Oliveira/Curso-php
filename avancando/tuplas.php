<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados); // Percorre o array e tranforma cada uma da chaves em uma variável

var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); //Cria um array contendo variáveis e seus valores
