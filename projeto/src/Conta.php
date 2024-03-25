<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function __construct(string $cpfTitular, string $nomeTitular) 
    {
        $this->cpfTitular = $cpfTitular;
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return;            
        }

        $this->saldo -= $valorASacar;
    } 

    public function deposita(float $valorADepoisitar): void
    {
        if ($valorADepoisitar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepoisitar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Seu saldo é insulficiente";
            return;
        }
        
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo():float
    {
        return $this->saldo;
    }

    public function recuperaCPFTitular():string
    {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular():string
    {
        return $this->nomeTitular;
    }
}