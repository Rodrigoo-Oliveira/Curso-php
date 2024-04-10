<?php 


class Produto
{
    public $descricao;
    public $preco;
    public $qtde_disp;
    public $qtde_vend;

    public function __construct(string $descricao, float $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->qtde_vend = 0;
    }

    public function repor($qtde)
    {
        $this->qtde_disp += $qtde; 
    }

    public function vender($qtde)
    {
        if ($qtde > 0 && $this->qtde_disp >= $qtde) {
            $this->qtde_disp -= $qtde;
            $this->qtde_vend += $qtde;

            return true;
        
        } else {
            return false;
        }
    }

    public function CalcularDesconto($qtde)
    {
        if ($qtde >= 10) {
            return 0.10;
        } else {
            return 0.03;
        }
    }

    public function exibirDados()
    {
        echo "Descrição: " . $this->descricao . PHP_EOL;
        echo "Preço: " . $this->preco . PHP_EOL;
        echo "Quantidade Disponível: " . $this->qtde_disp . PHP_EOL;
        echo "Quantidade Vendida: " . $this->qtde_vend . PHP_EOL;

        $qtde_compra = $this->qtde_disp + $this->qtde_vend;
        $desconto = $this->CalcularDesconto($qtde_compra);
        $precoComDesconto = $this->preco * (1 - $desconto);

        echo "Preço com desconto: " . $precoComDesconto . PHP_EOL;

        if ($this->qtde_vend > 10) {
            echo "Você ganhou um desconto de 10%" . PHP_EOL; 
        }
    }
}
