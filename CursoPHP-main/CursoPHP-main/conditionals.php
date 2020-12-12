<?php
/**
 * PHP Condicionales
 */
date_default_timezone_set('America/Mexico_City');
$t = date("H");
var_dump($t);

if ($t < "10") {
  echo "Que tengas buen día!";
} elseif ($t < "20") {
  echo "Que tengas un gran día!";
} else {
  echo "Que tengas buenas noches!";
}