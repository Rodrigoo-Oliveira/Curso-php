<?php

$ano = 2024;

if ($ano % 400 == 0) {
    echo "ano bissexto";
} else if ($ano % 4 == 0 && $ano % 100 != 0) {
    echo "ano bissexto";
} else {
    echo "ano não é bissexto";
}

