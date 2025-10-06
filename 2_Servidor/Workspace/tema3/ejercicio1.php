<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h3>Usando la recursividad explicada en clase mostrar una página web que calcule el factorial de un número mayor o igual a 1.</h3>";

function factorial($numero){
    if ($numero == 0) {
        return 1;
    } else {
        return $numero*factorial($numero-1);
    }
}

$valor = 5;
echo "El factorial de $valor es:" . factorial($valor);
    ?>
</body>
</html>