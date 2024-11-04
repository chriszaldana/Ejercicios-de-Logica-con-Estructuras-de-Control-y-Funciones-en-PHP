<?php

function generarFibonacci($n) {


    //Validamos que el numero ingresado no sea 0 o un numero negativo
    if ($n <= 0) {
        return "El numero es menor a 0";
    }

    //Inicializamos un array para poder mostrar la secuencia de Fibonacci
    $fibonacci= [];

    //Nos aseguramos que los primeros 2 numero de la secuencia sean 0 y 1
    $fibonacci[0] = 0;
    if($n > 1){
        $fibonacci[1] = 1;
    } 
    //recorremos el numero de veces que $n nos indique para sumar las 2 posiciones anteriores del array $fibonacci
    for ($i=2; $i < $n ; $i++) { 
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i -2];
    }

    return $fibonacci;

}

$n = 10;

print_r(generarFibonacci($n)) ;




?>
