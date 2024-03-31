<?php

require_once 'Retangulo.php';

$retangulo = new Retangulo(5, 3);
echo "Área do retângulo: " . $retangulo->calculaArea() . PHP_EOL;
echo "Perímetro do retângulo: " . $retangulo->calculaPerimetro() . PHP_EOL;