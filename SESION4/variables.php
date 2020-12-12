<?php
$txt = "Hola a todos";
/**
 * Loa nombre de variables empiezan con el signo de $
 * los nombre de las variables deben empezar con una letra o _
 * no pueden iniciar con un numero y solo pueden econtener caracteres
 * alfanumericos
 * los nombre de variables son sencibles a mayusculas y minusculas.
 * 
 */
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$a = 5;
$b = 3;

echo "La  suma de:" , ($a + $b);

#Alcance de las variables
//Global
$c = 5; // variable Global

function pruebaGlobal(){
    //utilizar n dentro de esta funcion maracra error.
    echo "<p>Variable c dentro de la funcion es: $c</p>";
}

pruebaGlobal();

echo "Variable c fuera de la funcion es: $c</p>";
//local
$z = 5; //variable global
/** 
*function pruebaGlobal(){
*    //utilizar n dentro de esta funcion maracar error.
*    echo "<p>Variable z dentro de la funcion es. $z</p>";    
*}
*
*pruebaGlobal();
*
*echo "Variable z fuera de la funcion es: $z</p>";
*local
*/
function pruebaLocal(){
    $z = 5; //variable local
    echo "<p>Variable z dentro de la funcion es: $z</p>";    
}

pruebaLocal();

//utilizar z afuera de la funcion maracar error.
echo "Variable z fuera de la funcion es: $z</p>";
