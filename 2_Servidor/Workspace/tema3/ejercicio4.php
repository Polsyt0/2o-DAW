<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if (isset($_POST["submit"])) { // si se ha pulsado el enviar
        $nombre=isset($_POST["nombre"])?strip_tags($_POST["nombre"]):"";
        $aficiones=isset($_POST["aficiones"])?$_POST["aficiones"]:[];
        $numaficiones=count($aficiones);
        echo "<h1> $nombre: </h1>";
        if ($numaficiones > 0) {
            echo "<p> Tiene $numaficiones.</p><ul>";
            foreach ($aficiones as $value) {
                echo "<li> $value </li>";
            }
            echo "</ul>";
        }else{
            echo "<h2> No tiene aficiones conocidas</h2>";
        }
    }

?>

<form action="ejercicio4.php" method="POST">
    <label for="nombre"> Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"/><br>
    <label for="aficiones">Aficiones: </label><br>
    <input type="checkbox" id="deporte1" name="aficiones[]" value="ciclismo">
    <label for="deporte 1"> Ciclismo</label><br>
    <input type="checkbox" id="deporte2" name="aficiones[]" value="baloncesto">
    <label for="deporte2"> Baloncesto</label><br>
    <input type="checkbox" id="deporte3" name="aficiones[]" value="futbol">
    <label for="deporte3"> Futbol</label><br>
    <input type="submit" value="Enviar!">
</form>

</body>
</html>