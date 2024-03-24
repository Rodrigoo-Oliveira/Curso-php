<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

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

    public function defineCPFTitular(string $cpf):void
    {
        $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome):void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaCPFTitular():string
    {
        return $this->cpfTitular;
    }
}