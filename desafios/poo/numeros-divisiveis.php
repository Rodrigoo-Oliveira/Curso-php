<?php


class VerificadorNumeros 
{
    private int $limite;

    public function __construct(int $limite)
    {
        $this->limite = $limite;
    }

    public function divisiveisPorTresEQuatro(int $numero):bool
    {
        if ($numero % 3 === 0 || $numero % 4 === 0) {
            return true;
        } else {
            return false;
        }
    }

    public function encontraDivisiveis():void
    {
        for ($i = 1; $i <= $this->limite; $i++) {
            if ($this->divisiveisPorTresEQuatro($i)) {
                echo $i . ' é divisivel por 3 e 4' . PHP_EOL;
            }
        }
    }
}

$numDivisiveis = new VerificadorNumeros(100);
$numDivisiveis->encontraDivisiveis();