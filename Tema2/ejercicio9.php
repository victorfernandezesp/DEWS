<?php
/**
 * Ejercicio 9: Escribir un script que utilizando variables permita obtener el siguiente resultado:
 * Valor es string.
 * Valor es double.
 * Valor es boolean.
 * Valor es integer.
 * Valor is NULL.
 * 
 * @author Victor Fernandez
 * @version 1.0
*/
// Cargamos Variables
$variable1 = "Harry";
$variable2 = 10000000000000000001000000000000000000;
$variable3 = TRUE;
$variable4 = 1000000000000000000;
$variable5 = NULL;
?>

<?php
echo ("Valor es ".gettype($variable1). ".");
?>
<br>

<?php
echo ("Valor es ".gettype($variable2). ".");
?>
<br>

<?php
echo ("Valor es ".gettype($variable3). ".");
?>
<br>

<?php
echo ("Valor es ".gettype($variable4). ".");
?>
<br>

<?php
echo ("Valor es ".gettype($variable5). ".");
?>
<br>

<h3><a href="https://github.com/victorfernandezesp/DEWS/blob/main/Tema2/ejercicio9.php">
<?php
echo "Link de Github al Ejercicio"; 
?>
</a></h3>