<?php
/**
 * Ejercicio 6: Script que cargue las siguientes variables:
 * $x=10;
 * $y=7;
 * y muestre
 * 10 + 7 = 17
 * 10 - 7 = 3
 * 10 * 7 = 70
 * 10 / 7 = 1.4285714285714
 * 10 % 7 = 3
 * 
 * @author Victor Fernandez
 * @version 1.0
*/
// Cargamos Variables
$num1 = 10;
$num2 = 7;
?>
<?php
$suma = $num1 + $num2;
echo ("$num1 + $num2 = $suma");
?>
<br>


<?php
$resta = $num1 - $num2;
echo ("$num1 - $num2 = $resta");
?>
<br>

<?php
$multiplicacion = $num1 * $num2;
echo ("$num1 * $num2 = $multiplicacion");
?>
<br>

<?php
$division = $num1 / $num2;
echo ("$num1 / $num2 = $division");
?>
<br>

<?php
$resto = $num1 % $num2;
echo ("$num1 % $num2 = $resto");
?>
<br>

<h3><a href="https://github.com/victorfernandezesp/DEWS/blob/main/Tema2/ejercicio6.php">
<?php
echo "Link de Github al Ejercicio"; 
?>
</a></h3>