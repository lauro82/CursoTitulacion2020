<?php
/**
 * Estructura switch case
 */
$estacion = "invierno";
switch($estacion){
    case 'primavera':
        echo "Bienvenido a la primavera";
    break;
    case 'invierno':
        echo "Bienvenido al invierno";
    break;
    default:
    echo "En que estacion estamos??";
break;
}
/**
 * Estructura while
 */
echo "<br>";
$x = 1;
while($x <=5) //condicion a cumplir
{
    echo "El numero X es: $x <br>"; //codigo a ejecutar
    $x++; //incremento de la variable condicionada
}
echo "<br>";
/**
 * estructura do while
 */
$y =1;
do{
    echo "El numero Y es: $y <br>";
    $y++;
} while($y <=10);