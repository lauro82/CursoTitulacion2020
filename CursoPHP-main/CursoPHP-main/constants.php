<?php

/**
 * PHP Constants
 * Para crear una constante utilice la función define()
 * sintaxis define(name, value, case-insensitive)
 */

define("SALUDO", "Bienvenido al curso de PHP");
echo SALUDO;
echo "<br>";
define("DESPEDIDA", "Hasta Pronto", true);
echo despedida;
echo "<br>";

/**
 * En PHP 7 se pueden definir arreglos como constantes
 */

define("carros", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo carros[2];

echo "<br>";
/**
 * Las constantes son globales
 */
define("BIENVENIDA", "Bienvenidos a la UICSLP");

function prueba()
{
    echo BIENVENIDA;
}
echo BIENVENIDA;

prueba();
