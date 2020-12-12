<?php
declare(strict_types=1);
/**
 * Declarar funciones en PHP
 */

function Saludo() {
    echo "Hola ¿cómo están?";
}
Saludo();
echo "<hr>";
/**
 * Función con parámetros
 */
function Suma(int $a, int $b){
    $resultado = $a + $b;
    return $resultado;
}
echo(Suma(5,10));