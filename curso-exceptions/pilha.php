<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
    funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExceção) { //Através de um | (pipe) na cláusula catch, podemos capturar mais de uma exceção. Com isso, podemos ter um único bloco para tratar uma ou mais exceções.
        echo $erroOuExceção->getMessage() . PHP_EOL;
        echo $erroOuExceção->getLine() . PHP_EOL;
        echo $erroOuExceção->getTraceAsString() . PHP_EOL;
        throw new RuntimeException(
            'Exceção foi tratada, mas, pega aí',
            1,
            $erroOuExceção
        );
    }

    echo 'Saindo da função 1' . PHP_EOL;

}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new RuntimeException();
    
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
