<?php
/**
 * Ejercicio 2: Mostrar Ficha Personal con foto.
 * @author Victor Fernandez
 * @version 1.0
*/
// Cargamos Variables
$email = "a21feesvi@iesgrancapitan.org";
$phone = "677794568";
$nombre = "Victor";
$apellidos = "Fernandez";
$linkedin = "https://linkedin.com";
$twitter = "https://twitter.com";
$foto =  "https://i.etsystatic.com/13855153/r/il/71b4ce/2696101864/il_570xN.2696101864_js04.jpg";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Víctor Fernández España</title>
</head>
<body>
    <h1><?php echo $nombre ." ". $apellidos?></h1>
    <h2>Web Developer</h2>
    <ul>
        <li><?php echo "Email de contacto: ". $email ?></li>
        <li><?php echo "Telefono de contacto: ". $phone ?></li>
        <li><?php echo "Linkedin de contacto: ". "<a href=\"$linkedin\">Linkedin</a>" ?></li>
        <li><?php echo "Twitter de contacto: ". "<a href=\"$twitter\">Twitter</a>" ?></li>
        <li><?php echo "<img src=\"$foto\" alt=\"Foto de Huron\">" ?></li>
    </ul>
    <h3><a href="https://github.com/victorfernandezesp/DEWS/blob/main/Tema2/ejercicio2.php">
        <?php
        echo "Link de Github al Ejercicio"; 
        ?>
    </a></h3>
    
</body>
</html>