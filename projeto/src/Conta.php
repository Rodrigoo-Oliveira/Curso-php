<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacar (float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return;            
        }

        $this->saldo -= $valorASacar;
    } 

    public function depositar(float $valorADepoisitar): void
    {
        if ($valorADepoisitar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepoisitar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Seu saldo é insulficiente";
            return;
        }
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo():float
    {
        return $this->saldo;
    }

    public function recuperarCPFTitular():string
    {
        return $this->cpfTitular;
    }
}