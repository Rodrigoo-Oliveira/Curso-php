<?php

require_once 'Aluno.php';

class Principal2
{
    public static function main()
    {
        $aluno = new Aluno("12345", "João");
        $aluno->atribuirNotas(9.5, 10);
        echo $aluno->calcularMedia() . PHP_EOL;
        echo $aluno->verificaSituacao() . PHP_EOL;
        echo "Nome do aluno: " . $aluno->nome . PHP_EOL;
        echo "RA do aluno: " . $aluno->ra . PHP_EOL;

        $aluno2 = new Aluno("54321", "Maria");
        $aluno2->atribuirNotas(5, 6.5);
        echo $aluno2->calcularMedia() . PHP_EOL;
        echo $aluno2->verificaSituacao() . PHP_EOL;
        echo "Nome do aluno: " . $aluno2->nome . PHP_EOL;
        echo "RA do aluno: " . $aluno2->ra . PHP_EOL;
    }
}

Principal2::main();