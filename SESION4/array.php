<?php
/**
 * un array almacena multiples valores en una variable.
 * En PHP la funcion array() es utilizada para crear un arreglo
 */

$frutas = array("Mango", "Manzana", "Pera", "Naranja");
echo "Compra " . $frutas[0] . ", " . $frutas[2] . " y " . $frutas[3];
echo "<br>";

/**
 * Obtener la longitud de un arreglo con la funcion count()
 */

 echo "longitud: " . count($frutas);
echo "<br>";

/**
 * Arreglos ondexados en php
 * Los indices se pueden asignar automaticamente o de manera manual
 */

// Asignacion automatica
$animales =array('perro', 'gato', 'conejo');
var_dump($animales);
echo "<br>",

//Asignacion manual
$colores[0] = "rojo";
$colores[1] = "azul";
$colores[2] = "verde";
var_dump($colores);
echo "<br>";

/**
 *Iterar un arreglo
 */

 $idiomas = array(
    "español",
    "ingles",
    "aleman",
    "frances",
    "portugues",
    "italiano"
 );
$idiomasLength = count($idiomas);
echo "Los idiomas son: <br>";
for($x=0; $x < $idiomasLength; $x++){
    echo $idiomas[$x];
    echo "<br>";
}

/**
 * Arreglo asociativo
 */

$edad = array(
"Pedro" => 25,
"Juan" => 26,
"Alejandro" => 30
 );
echo "Juan tiene " . $edad["Juan"] . " años";
echo "<br>";

/**
 * Iterar en un arreglo asociativo
 */

foreach ($edad as $key => $value){
echo "Llave = " . $key . ", valor = " . $value;
echo "<br>";
}

/**
 * Array multidimensional
 */
echo "<hr>";
$cars = array(
array("Volvo",22,18),
array("BMW",15,13),
array("Golf",5,2),
array("Land Rover",17,15)
);
var_dump($cars);
echo "<hr>";

echo $cars[0][0].": En almacén: ".$cars[0][1].", vendidos: ".$cars[0][2].".<br>";
echo $cars[1][0].": En almacén: ".$cars[1][1].", vendidos: ".$cars[1][2].".<br>";
echo $cars[2][0].": En almacén: ".$cars[2][1].", vendidos: ".$cars[2][2].".<br>";
echo $cars[3][0].": En almacén: ".$cars[3][1].", vendidos: ".$cars[3][2].".<br>";

/**
 * Iterar en un array multidimensional
 */
for ($row = 0; $row < 4; $row++){
    echo "<p><b>Número de fila $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}