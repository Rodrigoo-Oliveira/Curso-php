<?php

class Conta 
{

    private $titular;        
    private float $saldo;
    private static $numeroDeContas = 0; 

    public function __construct(Titular $titular) 
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++; // Para acessar atributos estáticos e possiveis metodos estáticos
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
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

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}