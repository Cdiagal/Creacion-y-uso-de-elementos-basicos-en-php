<?php
/**
 * Ejercicio 16. Numero perfecto.
 * Comprueba si un número es perfecto (la suma de sus divisores propios es igual al número).
 * @author cdiagal
 * @version 1.0.0
 */

echo "Introduce un numero: ";
$numero = (int) readline();
$suma = 0;

for ($i=1; $i < $numero; $i++) { 
    if($numero % $i == 0){
        $suma += $i;
    }
}

if ($suma == $numero){
    echo "$numero es un número perfecto. \n";
} else {
    echo "$numero no es un número perfecto. \n";
}

?>