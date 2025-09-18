<?php
/**
 * Ejercicio 13. Múltiplos de un número.
 * Pide un número n y muestra sus múltiplos hasta 100.
 * @author cdiagal
 * @version 1.0.0
 */

echo "Introduce un numero: ";
    $numero = (int) readline();

    for ($i=1; $i < 100; $i++) { 
        if($i % $numero == 0){
            echo $i . " , ";
        }
    }


?>