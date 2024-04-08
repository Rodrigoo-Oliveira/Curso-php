<?php

for ($cont = 1; $cont <= 15; $cont +=1) {
    if ($cont == 13) {
        continue;
    } 
    
    echo "#$cont" . PHP_EOL;
}


/*

Dessa forma o código fica um pouca mais sucinto e uma forma mais recomenda

for ($cont = 1; $cont <= 15; $cont++) {
    echo "#$cont" . PHP_EOL;

}

*/