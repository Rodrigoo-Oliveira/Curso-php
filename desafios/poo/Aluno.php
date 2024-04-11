<?php

class Aluno
{
    public string $ra;
    public string $nome;
    public float $p1;
    public float $p2;
    public float $media;

    public function __construct(string $ra, string $nome)
    {
        $this->ra = $ra;
        $this->nome = $nome;
    }

    public function atribuirNotas(float $p1, float $p2)
    {
        $this->p1 = $p1;
        $this->p2 = $p2;
    }

    public function calcularMedia()
    {
        $this->media = ($this->p1 + $this->p2) / 2;
        return "\nMédia das notas: " . $this->media;
    }

    public function verificaSituacao()
    {
        if ($this->media >= 7) {
            return 'Situação do aluno: Aprovado';
        } elseif ($this->media < 7 && $this->media >= 4) {
            return 'Situação do aluno: Exame';
        } else {
            return 'Situação do aluno: Reprovado';
        }
    }
}