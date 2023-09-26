<?php
/**
 * Ejercicio 3: Script que, a partir del radio almacenado en una variable y la definición de la
 * constante PI, calcule el área del círculo y la longitud de la circunferencia. El debe
 * mostrar valor de radio, longitud de la circunferencia, área del círculo y dibujará un
 * círculo utilizando gráficos vectoriales.
 * @author Victor Fernandez
 * @version 1.0
*/
// Cargamos Variables
$radio = 100;
$pi = 3.1416;

$area = $pi * pow($radio,2);
$diametro = $radio * 2;
$longuitud_circunferencia = $pi * $diametro;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Victor Fernandez</title>
</head>
<body>
    <br>
    <?php
    echo ("Radio = ".$radio);
    ?>
    <br>
    
    <?php
    echo ("Longitud = ".$longuitud_circunferencia);
    ?>
    <br>
    <?php
    echo ("Area = ".$area);
    ?>
    <br>
    
        <svg width="1000" height="1000" style="border: 1px solid black">

            <circle cx="500" cy="500" r="<?php echo $radio;?>" fill="transparent" stroke="black">
            </circle>
        </svg>

        <h3><a href="https://github.com/victorfernandezesp/DEWS/blob/main/Tema2/ejercicio3.php">
    <?php
    echo "Link de Github al Ejercicio"; 
    ?>
    </a></h3>
    
</body>
</html>
