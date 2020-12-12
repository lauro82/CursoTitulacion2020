<?php
/**
 * Mostrando texto con echo o echo()
 */
echo "<h2>PHP es divertido!</h2>";
echo "Hola mundo!<br>";
echo "Estoy aprendiendo PHP<br>";
echo "Esta ", "cadena de texto ", "fue ", "realizada ", "con multiples parametros";

echo "<br>";
/**
 * Mostrando variables con echo
 */
$txt1 = "Aprende PHP";
$txt2 = "UICSLP";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>"; # el . se utiliza para concatenar
echo "Estudia PHP en la " . $txt2 . "<br>";
echo $x + $y;

echo "<br>";

/**
 * Mostrando texto con print o print() 
 */

print "<h2>PHP es divertido!</h2>";
print "Hola mundo!<br>";
print("Estoy aprendiendo PHP");

/**
 * Mostrando variables con print o  print()
 */
$txt3 = "Aprendo PHP";
$txt4 = "UICSLP";
$a = 5;
$b = 4;

print "<h2>" . $txt1 . "</h2>";
print "Estudia PHP en la " . $txt2 . "<br>";
print($x + $y);





