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
    }

    public function repor($qtde)
    {
        $this->qtde_disp += $qtde; 
    }

    public function vender($qtde)
    {
        if ($this->qtde_disp >= $qtde) {
            $this->qtde_disp -= $qtde;
            return true;
        } else {
            return false;
        }
    }
}