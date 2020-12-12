<?php
# Declaración de Variables
$txt = "Hola a todos";
/*  Los nombres de variables empiezan con el signo de $ 
    los nombres de las variables deben empezar con una letra o _
    No pueden iniciar con un número y solo pueden contener caracteres 
    alfanuméricos
    Los nombres de variables son sencibles a mayúsculas y mínusculas
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

echo "La suma de: " , ($a + $b);

# Alcance de las variables

// Global 
$c = 5; // variable global

function pruebaGlobal() {
  // utilizar c detro de esta función marcará error.
  echo "<p>Variable c dentro de la función es: $c</p>";
}

pruebaGlobal();

echo "Variable c fuera de la función es: $c</p>";

// local

function pruebaLocal() {
  $z = 5; // variable local
  echo "<p>Variable z dentro de la función es: $z</p>";
}

pruebaLocal();

// utilizar z afuera de la función marcará error.
echo "Variable z fuera de la función es: $z</p>";