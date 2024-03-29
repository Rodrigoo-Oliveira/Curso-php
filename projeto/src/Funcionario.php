<?php

namespace Alura\Banco\Modelo\Conta;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo()
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome):void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}