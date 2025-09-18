<?php
/**
 * Ejercicio 1. Mayor de dos numeros.
 * Pide dos numeros y muestra cual es mayor o sin son iguales.
 * 
 * @author cdiagal
 * @version 1.0.0
 */


echo "Introduce un primer numero:";
    $numero1 = (int) readline();
echo "Introduce un segundo numero:";
    $numero2 = (int) readline();

if ($numero1 > $numero2){
    echo "$numero1 es mayor que $numero2";
}
if ($numero2 > $numero1){
    echo "$numero2 es mayor que $numero1";
} else {
    echo "Los numeros son iguales";
}

?>