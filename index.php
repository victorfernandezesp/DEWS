<?php
/**
 * Portfolio para Index
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
    </ul>
    <h2> Tareas </h2>
    <ul>
        <li>Tema 1: <a href="/Tema1/a.html"> Link</a></li>
        <li>Tema 2: <a href=""></a></li>
    </ul>
    
</body>
</html>