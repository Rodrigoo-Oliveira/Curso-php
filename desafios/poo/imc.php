<?php


class calculadoraPesoIdeal
{
    private string $sexo;
    private float $altura; 
    
    public function __construct($sexo, $altura) 
    {
        $this->sexo = $sexo;
        $this->altura = $altura;
    }

    public function calculaPesoIdeal()
    {   
        if ($this->sexo === 'm') {
            return 72.7 * $this->altura - 58;
        } elseif ($this->sexo === 'f') {
            return 62.1 * $this->altura - 44.7;
        } else {
            return null;
        }
    }
}

function lerSexo()
{
    while (true) {
        echo "Informe o sexo (m/f) para saber o peso ideal: " . PHP_EOL;
        $sexo = strtolower(trim(fgets(STDIN)));
        if ($sexo === 'm' || $sexo === 'f') {
            return $sexo;
        } else {
            echo "Por favor, informe ( m ) para masculino e ( f ) para feminino" . PHP_EOL; 
        }
    }
}

function lerAltura() {
    while (true) {
        echo "Informe a altura para saber o peso ideal: " . PHP_EOL;
        $altura = floatval(trim(fgets(STDIN)));
        if ($altura > 0) {
            return $altura;
        } else {
            echo "Por favor, Informe a altura corretamente" . PHP_EOL;
        }
    }
}

$sexo = lerSexo(); 
$altura = lerAltura();
$calculadora = new calculadoraPesoIdeal($sexo, $altura);
$pesoIdeal = $calculadora->calculaPesoIdeal();

if ($pesoIdeal !== null) {
    echo "Seu peso ideal: $pesoIdeal kg" . PHP_EOL;    
} else {
    echo "Erro: Sexo não reconhecido" . PHP_EOL;
}
