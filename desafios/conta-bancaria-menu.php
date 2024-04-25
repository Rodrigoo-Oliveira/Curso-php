<?php

$saldo = 1000;
$titular = "João";
$opcao = 0;

do {
    echo "=========================\n";
    echo "Escolha umas das opções:\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "=========================\n";

    $opcao = (int)fgets(STDIN);

    switch ($opcao) {
        case 1: 
            echo "Saldo atual: R$ " . number_format($saldo, 2)."\n";
            break;
        case 2:
            echo "informe o valor a sacar: R$ ";
            $sacar = (float)fgets(STDIN);

            if (!is_numeric($sacar) || $sacar <= 0) {
                echo "Valor inválido, informe um valor positivo\n";
            } elseif ($sacar > $saldo) {
                echo "Saldo insulficiente.\n";
            } else {
                $saldo -= $sacar;
                echo "Saque realizado com sucesso! Saldo atual: R$ " . number_format($saldo, 2). "\n";
                break;
            }
        case 3:
            echo "Informe o valor para depósito: R$ ";
            $depositar = (float)fgets(STDIN);

            if (!is_numeric($depositar) || $depositar <= 0) {
                echo "Valor inválido, informe um valor positivo\n";
            } else {
                $saldo += $depositar;
                echo "Deposito realizado com sucesso! Saldo atual: R$ " . number_format($saldo, 2). "\n"; 
            }
            break;
        case 4:
            echo "Obrigado! Volte sempre\n";
            break;
        default:
            echo "Opção inválida! Tente novamente\n";
            break;
    }

} while($opcao != "4");