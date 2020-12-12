<?php
declare(strict_types=1);
/**
 * Declarar funciones en PHP
 */

 function Saludo(){
     echo "Hola ¿Cómo están?";
 }
Saludo();
echo "<hr>";
/**
 * Función con parametros
 */
function suma(int $a, int $b){
echo $a + $b;
}
suma (5,10);
