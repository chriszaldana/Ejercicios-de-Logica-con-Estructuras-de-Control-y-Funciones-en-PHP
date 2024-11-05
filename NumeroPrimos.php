<?php

function numeroEsPrimo ($n){

    if ($n <= 1) {
        return false;
    }

    for ($i=2; $i <sqrt($n) ; $i++) { 
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$n = 35;

if(numeroEsPrimo($n)){
    echo "El numero $n es primo";
}else{
    echo "El numero $n no es primo";
}

?>