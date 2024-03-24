<?php

/*

$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

*/

$idadeList = array("João", "Maria", "Pedro", "Ana");

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
