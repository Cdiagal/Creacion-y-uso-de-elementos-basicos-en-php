<?php
/**
 * Ejercicio 4. Nota final
 * Pide la nota de un alumno y muestra:
 * "Suspenso" (< 5), "Aprobado" (5–6), "Notable" (7–8), "Sobresaliente" (9–10).
 * @author cdiagal
 * @version 1.0.0
 */

echo "Introduce una nota: ";
$nota = (int) readline();

switch (true) {
    case ($nota < 5):
        echo "Suspenso";
        break;
    case ($nota >= 5 && $nota <= 6):
        echo "Aprobado";
        break;
    case ($nota >= 7 && $nota <= 8):
        echo "Notable";
        break;
    case ($nota >= 9 && $nota <= 10):
        echo "Sobresaliente";
        break;
    default:
        echo "Nota no válida";
}
?>

