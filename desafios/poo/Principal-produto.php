<?php

require_once 'Produto.php';
require_once 'Fabricante.php';

class Principal1
{
    public static function main()
    {
        $fabricante = new Fabricante("Empresa X", "Rua X, 123", "9999-9999");

        $produto = new Produto("Camiseta", 25.99);
        $produto->atualizaFabricante($fabricante);
        $produto->repor(500);

        echo "Quantas camisetas você deseja comprar? ";
        $qtde_compra = intval(fgets(STDIN));

        if ($produto->vender($qtde_compra)) {
            echo "Venda realizada!" . PHP_EOL;
        } else {
            echo "Quantidade insulficiente" . PHP_EOL;
        }
;
        $produto->exibirDados();


    }
}

Principal1::main();