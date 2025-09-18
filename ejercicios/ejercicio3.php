<?php
/**
 * Ejercicio 3. Positivo, negativo o cero.
 * Comprueba si un numero almacenado en una variable es positivo, negativo o cero.
 * @author cdiagal
 * @version 1.0.0
 */

echo "Introduce un numero: ";
$numero = (int) readline();

if ($numero < 0){
    echo "El número es negativo";
}
if ($numero > 0){
    echo "El numero es positivo";
}
if ($numero = 0){
    echo "El numero es cero";
}

?>