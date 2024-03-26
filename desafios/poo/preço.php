<?php

class Produto 
{
    private $nome;
    private $precoCusto;

    
    public function __construct($nome, $precoCusto)
    {
        $this->nome = $nome;
        $this->precoCusto = $precoCusto; 
    }

}
