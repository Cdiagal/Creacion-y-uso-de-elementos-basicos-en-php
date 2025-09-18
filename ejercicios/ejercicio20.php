<?php
/**
 * Ejercicio 20. Triángulo de asteriscos.
 * Muestra en pantalla un triángulo de altura n usando *.
 * @author cdiagal
 * @version 1.0.0
 */

echo "Introduce la altura del triángulo: ";
$n = (int) readline();

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("*", $i) . "\n";
}

?>