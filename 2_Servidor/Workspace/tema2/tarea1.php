<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <?php
    echo"<h3>1.</h3>";
        echo "Hola Mundo";

        echo "<br>";

    echo "<h3>2.</h3>";
        $var1 = 6;
        $var2 = 5;
        $res = $var1 + $var2;
        echo "El resultado de la suma es: $res";

        echo "<h3>3.</h3>";
        echo "<br>";

        $a = 10;
        $b = 20;
    if ($a > $b) {
        $resultado = "La variable 'a' ($a) es mayor que la variable 'b' ($b).";
    } elseif ($a < $b) {
        $resultado = "La variable 'b' ($b) es mayor que la variable 'a' ($a).";
    } else {
        $resultado = "Ambas variables son iguales: 'a' = $a, 'b' = $b.";
    }
    echo $resultado;

    echo "<br>";

    $i = 1;
    while ( $i <= 10) {
        echo $i;
        $i++;
    }

    echo "<br>";

    for ($num = 1; $num <= 5; $num++) {
        echo "<h3>Tabla de multiplicar del $num</h3>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "$num x $i = $resultado<br>";
        }
    }

    echo "<br>";

    $nombre = "Pablo";
    echo "Hola, $nombre, Como estas?";

    echo "<br>";

    $randomNumber = rand(1, 10);

    if ($randomNumber <= 5) 
        echo "activo";
    else  echo "no acivo";

    $valor = 'alto';
    switch ($valor) {
        case 'alto':
            echo 'el valor es alto';
        case'bajo':
            echo 'el valor es bajo';
    }
    ?> 
</body>
</html>