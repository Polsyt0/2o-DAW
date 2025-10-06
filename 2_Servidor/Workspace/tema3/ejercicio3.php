<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3
    </title>
</head>
<body>

<?php
    $precio = isset($_GET["precio"])?strip_tags($_GET["precio"]):"";
    echo "<h1>$precio</h1>";

    if ($precio > 100 && $precio < 500) {
        $descuento = $precio * 0.10;
        $preciofinal = $precio - $descuento;
        echo "$preciofinal";
    }elseif ($precio >= 500) {
        $descuento = $precio * 0.15;
        $preciofinal = $precio - $descuento;
        echo "$preciofinal";
    } else {
        if (empty($precio)) {
            echo "Introduce un precio";
            echo "0";
        } else {
            echo "No hay descuento disponible";
            echo "0";
        };
    };
?>

<form action="ejercicio3.php" method="GET">
    <label for="fprecio">Precio: </label><br>
    <input type="text" id="fprecio" name="precio" value=""><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>