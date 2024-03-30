<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacoes
{
    
    private $totalBonificacoes = 0;
    
    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal():float
    {   
        return $this->totalBonificacoes;
    }
}