<?php
/**
 * Ejercicio 8: A veces es necesario conocer exactamente el contenido de una variable. Piensa
 * como puedes hacer esto y escribe un script con la siguiente salida:
 * string(5) “Harry”
 * Harry
 * int(28)
 * NULL
 * 
 * @author Victor Fernandez
 * @version 1.0
*/
// Cargamos Variables
$variable1 = "Harry";
$variable2 = 1000000000000000000;
$variable3 = NULL;
?>

<?php
echo gettype($variable1);
echo ("(".strlen($variable1).") ");
echo ("\"".$variable1)."\"";
?>
<br>

<?php
echo ($variable1);
?>
<br>

<?php
echo gettype($variable2);
echo ("(".strlen($variable2).") ");
?>
 <br>
 
<?php
echo gettype($variable3);
?>
<br>

<h3><a href="https://github.com/victorfernandezesp/DEWS/blob/main/Tema2/ejercicio8.php">
<?php
echo "Link de Github al Ejercicio"; 
?>
</a></h3>