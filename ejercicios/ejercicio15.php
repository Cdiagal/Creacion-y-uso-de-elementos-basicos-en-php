<?php
/**
 * Ejercicio 15. Adivina el numero.
 * Genera un número aleatorio entre 1 y 20.
 * Pide al usuario que lo adivine y usa un bucle con condicionales para dar pistas: "Mayor" o "Menor".
 * @author cdiagal
 * @version 1.0.0
 */


$numSecret = rand(1, 20);
$intentos = 0;

do {
    echo "Adivina un numero del 1 al 20: ";
    $numero = (int) readline();
    $intentos++;

    if ($numero < $numSecret) {
        echo "Mayor\n";
    } elseif ($numero > $numSecret) {
        echo "Menor\n";
    } else {
        echo "Correcto, has necesitado $intentos intentos.\n";
    }
} while ($numero != $numSecret);

?>