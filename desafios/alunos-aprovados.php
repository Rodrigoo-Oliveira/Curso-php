<?php

$alunos = [
    ["nome" => "João", "nota" => 8.5],
    ["nome" => "Maria", "nota" => 9.0],
    ["nome" => "Pedro", "nota" => 6.5]
];

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function calcularMedia(array $alunos) : float
{
        $soma = 0;
        $notasAlunos = count($alunos);

        foreach ($alunos as $nota) {
            $soma += $nota;
        }
        
        if ($notasAlunos > 0) {
            $media = $soma / $notasAlunos;
            return $media;
        } else {
            return 0;
        }  
}

function exibirAprovados(array $alunos) : void
{
    foreach($alunos as $aluno) {
        if($aluno['nota'] >= 7) {
            exibeMensagem("Aluno: " . $aluno['nome'] . "/ Status:" . " Aprovado");
        } else {
            exibeMensagem("Aluno: " . $aluno['nome'] . "/ Status:" . " Reprovado");
        }
    
    exibeMensagem("Nota do aluno: " . $aluno['nota']);    
    
    }
        
}

exibirAprovados($alunos);



