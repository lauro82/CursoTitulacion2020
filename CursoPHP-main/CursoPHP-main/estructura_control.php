<?php
/**
 * Estructura switch case
 */
$estacion = "invierno";

switch ($estacion) {
    case 'primavera':
        echo "Bienvenidos a la primavera";
        break;
    case 'invierno':
        echo "Hace frío";
        break;
    default:
        echo "En qué estación estamos??";
        break;
}
/**
 * Estructura while
 */
$x = 1;
while($x <= 5) // Condición a cumplir
{ 
  echo "El número es: $x <br>"; // Código a ejecutar
  $x++; // Incremento de la variable condicionada
}
echo "<br>";
/**
 * Estructura do while
 */
$y = 1;
do {
    echo "El número es: $y <br>";
    $y++;
} while ($y <= 10);