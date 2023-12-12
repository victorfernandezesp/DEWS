<?php
/**
 * Ejercicio 4: ¿Cuál es la salida del siguiente script?
 * Prueba el script y modifícalo para las palabras DAW y DWES apararezcan en negrita.
 * Investiga uso de print y printf para salida de texto.
 * @author Victor Fernandez
 * @version 1.0
*/
// Cargamos Variables
$ciclo="DAW";
$modulo="DWES";
print "<p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Víctor Fernández España</title>
</head>
<body>
    <?php
    printf("%s es un modulo de %d curso de %s", "<b>\"$modulo\"</b>", 2, "<b>\"$ciclo\"</b>");
    print "</p>";
    
    ?>
    
    <h3><a href="https://github.com/victorfernandezesp/DEWS/blob/main/Tema2/ejercicio4.php">
    <?php
    echo "Link de Github al Ejercicio"; 
    ?>
    </a></h3>
</body>
</html>
