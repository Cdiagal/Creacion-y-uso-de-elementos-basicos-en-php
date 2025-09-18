<?php
/**
 * Ejercicio 18. Palindromo.
 * Comprueba si una palabra almacenada en una variable es palíndroma.
 * @author cdiagal
 * @version 1.0.0
 */

echo "Introduce una palabra: ";
$word = readline();
$word = strtolower($word);
$invertida = strrev($word);

if ($word === $invertida){
    echo "La palabra $word es un palindromo \n";
} else {
    echo "La palabra $word no es un palindromo \n";
}

?>