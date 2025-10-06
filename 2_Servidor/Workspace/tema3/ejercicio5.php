<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<?php 

?>

<form action="ejercicio5.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="direccion">Apellido:</label><br>
    <input type="text" id="direccion" name="direccion"><br><br>
    <label for="pizzas">Pizzas:</label><br>
    <input list="pizzas">
        <datalist id="pizzas">
            <option value="margarita">
            <option value="bacon queso">
            <option value="cuatro quesos">
            <option value="jamon york queso">
            <option value="tomate">
        </datalist><br>
    <input type="submit" value="HACER PEDIDO!">
</form>
</body>
</html>