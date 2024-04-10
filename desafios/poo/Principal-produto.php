<?php

require_once 'Produto.php';

class Principal1
{
    public static function main()
    {
        $produto = new Produto("Camiseta", 25.99);
        $produto->repor(500);

        echo "Quantas camisetas você deseja comprar? ";
        $qtde_compra = intval(fgets(STDIN));

        if ($produto->vender($qtde_compra)) {
            echo "Venda realizada!" . PHP_EOL;
        } else {
            echo "Quantidade insulficiente" . PHP_EOL;
        }

        echo "Dados do produto: " . PHP_EOL;
        $produto->exibirDados();
    }
}

Principal1::main();