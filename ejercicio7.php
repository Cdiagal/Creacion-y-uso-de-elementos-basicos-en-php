<?php
/**
 * Ejercicio 7. Tabla de multiplicar
 * Pide un numero y genera su tabla de multiplicar del 1 al 10.
 * @author cdiagal
 * @version 1.0.0
 */

echo "Introduce un numero: ";
$numero  = (int) readline();

for ($i=1; $i < 10; $i++) { 
    echo "$numero x $i = " . ($numero * $i) . "\n" ;
}

?>