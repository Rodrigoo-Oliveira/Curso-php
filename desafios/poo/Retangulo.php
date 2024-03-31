<?php


 class Retangulo
{
    public int $base;
    public int $altura;

    public function __construct(int $base, int $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calculaArea()
    {
        return $this->base * $this->altura;
    }

    public function calculaPerimetro()
    {
        return 2 * ($this->base + $this->altura); 
    }
}