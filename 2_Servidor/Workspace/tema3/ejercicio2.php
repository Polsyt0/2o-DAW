<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    echo "<h1>HACER LA SECUENCIA DE FIBONACCI</h1>";

    function fibonacci($numero){
        if ($numero == 0) {
            return 0;
        }elseif ($numero == 1) {
            return 1;
        } else {
            return fibonacci($numero-1)+fibonacci($numero-2);
        }
    }

    $numero = 6;
    echo "El numero de fibonacci del $numero es: " . fibonacci($numero);

    ?>
</body> 
</html>