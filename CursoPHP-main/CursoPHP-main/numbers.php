<?php
/**
 * Funciones de PHP para verificar si la variable es un entero
 * is_int()
 * is_integer()
 * is_long()
 */

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

/**
 * Funciones de PHP para verificar si la variable es un decimal o un número en su forma exponencial
 * is_float()
 * is_double()
 */

$x = 10.365;
var_dump(is_float($x));

/**
 * Funciones de PHP para verificar si la variable es finita o infinita
 * is_finite()
 * is_infinite()
 * de igual manera PHP var_dump() devuelve el tipo de dato
 */

$x = 1.9e411;
var_dump($x);

/**
 * Funcion de PHP para verificar si el valor de la variable es un numero
 * is_nan()
 * de igual manera PHP var_dump() devuelve el tipo de dato
 */

$x = acos(8);
var_dump($x);