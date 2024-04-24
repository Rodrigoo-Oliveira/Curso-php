<?php

$horario = 23;


if ($horario < 6) {
    echo "Boa madrugada!";
} elseif ($horario > 6 && $horario < 12) {
    echo "Bom dia!";
} elseif ($horario > 12 && $horario < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}