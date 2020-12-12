<?php

// String
$saludo = "Hola";
echo $saludo." Bienvenidos a ".'PHP';
echo "<br>";

//integer
echo "<hr>";
$x = 2020;
var_dump($x);
echo "<br>";

//float
echo "<hr>";
$y = 10.5672;
var_dump($y);
echo "<br>";

//Bolean
echo "<hr>";
$verdadero = true;
$falso = false;
var_dump($verdadero);
echo "<br>";

//Array
echo "<hr>";
$colores = array("rojo", "verde", "azul", "negro", "blanco");
var_dump($colores);
echo "<br>";

//object
echo "<hr>";
class Carro {
    public $color; // atributos 
    public $modelo;

    public function __construct($color, $modelo){
        $this->color = $color;
        $this->modelo = $modelo;
    }
    
    public function mensaje(){
        return "Mi carro es un " . $this->modelo . " " . $this->color;
    }
    public function detenerse(){
        return "Deteniendose...";
    }
}
// objeto 1
$miCarro = new Carro ("Rojo", "Chevrolet");
echo $miCarro->mensaje();
echo "<br>";
echo $miCarro->detenerse();
echo "<br>";
// objeto 2
$miCarro = new Carro ("Blanco", "Toyota");
echo $miCarro->mensaje();
echo "<br>";

//null
echo "<hr>";
$valor = 4;
$valor = null; //es diferten a decir $valor=" ". 
var_dump($valor);

//Resource
/**
 * Recursos externoa PHP
 * Base de datos
 * Archivos
 * Funciones
 * Etc.
 */