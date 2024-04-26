<?php

function ordena($array):array
{
    sort($array);
    return $array;
}

$array = array("laranja", "maçã", "banana", "caju", "melancia", "uva", "graviola");

$ordemAlfabetica = ordena($array);
echo "Array ordenado:\n";
print_r($ordemAlfabetica);