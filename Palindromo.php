<?php

    function esPalindromo($palabra){


        //Convertimos la palabra a minuscula para que sea mas simple la comparacion
        $palabra = strtolower($palabra);

        //Quitar cualquier espacio en la palabra
        $palabra = str_replace(' ', '', $palabra );

        //Invertimos la palabra
        $reversa = strrev($palabra);

        return $palabra == $reversa;
    }

    $palabra = 'Christian ';

   if (esPalindromo($palabra)) {
        echo "$palabra es un palindromo";
   }else{
    echo "$palabra no es un palindromo";
   }
  
?>