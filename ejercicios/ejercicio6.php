<?php
/**
 * Ejercicio 6. Suma acumulada
 * Calcula la suma de los números del 1 al 50 usando un bucle.
 * @author cdiagal
 * @version 1.0.0
 */

$suma = 0;
for ($i=1; $i < 50; $i++) { 
    $suma += $i;
}

echo "La suma de 1 a 50 es : $suma";
?>