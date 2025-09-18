<?php
/**
 * Ejercicio 2. Edad permitida
 * Pide la edad de una persona y muestra; 
 * "Eres menor de edad" si es < 18.
 * "Eres mayor de edad" si es ≥ 18.
 * @author cdiagal
 * @version 1.0.0
 */


echo "Introduce tu edad:";
    $edad = (int) readline();

    if ($edad > 18){
        echo "Eres mayor de edad";
    } else {
        echo "Eres menor de edad";
    }

?>