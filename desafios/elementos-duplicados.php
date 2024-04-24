<?php

$array = [1,2,2,3,4,4,5];

$arraySemDuplicados = array_unique($array);

foreach ($arraySemDuplicados as $elemento) {
    echo $elemento . ' ';
}