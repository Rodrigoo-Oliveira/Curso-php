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
            return true;
        } else {
            return false;
        }
    }

    public function exibirDados()
    {
        echo "Descrição: " . $this->descricao . PHP_EOL;
        echo "Preço: " . $this->preco . PHP_EOL;
        echo "Quantidade Disponível: " . $this->qtde_disp . PHP_EOL;
        echo "Quantidade Vendida: " . $this->qtde_vend . PHP_EOL;
    }



}