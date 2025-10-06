<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nombre= isset($_GET["nombre"])?strip_tags($_GET["nombre"]):"";
/* 
if (isset($_GET["nombre"])) $nombre= $_GET["nombre"]
else $nombre=""; 
*/
    $apellido= isset($_GET["apellido"])?htmlspecialchars($_GET["apellido"]):"";
    echo"<p>$nombre $apellido</p>";

// ----------------------------------------------------------

    $nombre2= isset($_POST["nombre2"])?$_POST["nombre2"]:"";
/* 
if (isset($_GET["nombre"])) $nombre= $_GET["nombre"]
else $nombre=""; 
*/
    $apellido2= isset($_POST["apellido2"])?$_POST["apellido2"]:"";
    echo"<p>$nombre2 $apellido2</p>";
?>

<form action="ejemplo2.php" method="GET">
    <label for="fname">Nombre:</label><br>
    <input type="text" id="fname" name="nombre" value="John"><br>
    <label for="lname">Apellido:</label><br>
    <input type="text" id="lname" name="apellido" value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>

<form action="ejemplo2.php" method="POST">
    <label for="fname">Nombre:</label><br>
    <input type="text" id="fname" name="nombre2" value="John"><br>
    <label for="lname">Apellido:</label><br>
    <input type="text" id="lname" name="apellido2" value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>