<?php

function realizarOperacao(int $num1, int $num2, string $operacao) 
{
    switch ($operacao) {
        case "+": $num1 + $num2;
            $resultado = $num1 + $num2;
            break;
        case "-": $num1 - $num2;
            $resultado = $num1 - $num2;
            break;
        case "/": 
            if ($num2 == 0) {
                echo "Não é possível dividir por zero\n";
                return;
            }
            $resultado = $num1 / $num2;
            break;
        case "*": $num1 * $num2;
            $resultado = $num1 * $num2;
            break;
        default:
    }
    return $resultado;
}

$resultado = realizarOperacao(10, 5, "+");
echo "Soma: " . $resultado . "\n";

$resultado = realizarOperacao(10, 5, "-");
echo "Subtração: " . $resultado . "\n";

$resultado = realizarOperacao(10, 0, "/");
if ($resultado !== null) {
    echo "Divisão: " . $resultado . "\n";
}

$resultado = realizarOperacao(10, 5, "*");
echo "Multiplicação: " . $resultado . "\n";
