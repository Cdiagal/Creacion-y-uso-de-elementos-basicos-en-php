<?php
/**
 * Ejercicio 14. Suma de pares e impares.
 * Calcula la suma de los números pares e impares entre 1 y 100 por separado.
 * @author cdiagal
 * @version 1.0.0
 */

$sumaPares = 0;
$sumaImpares = 0;

    for ($i=1; $i <= 100; $i++) { 
        if($i % 2 == 0){
            $sumaPares += $i;
        } else {
            $sumaImpares += $i;
        }
    }

    echo "La suma de los numeros pares es : $sumaPares \n";
    echo "La suma de los numeros impares es : $sumaImpares \n";
?>