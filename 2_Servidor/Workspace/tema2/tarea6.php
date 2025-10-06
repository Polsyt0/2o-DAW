<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $coches=[
        "Audi"=>["vendidos"=>5, "stock"=>7],
        "Vokswagen"=>["vendidos"=>6, "stock"=>3],
        "BMW"=>["vendidos"=>1, "stock"=>10],
        "Hyundai"=>["vendidos"=>0, "stock"=>11],
    ];

    $primero = true;
    echo "<table border= 4>";
    foreach ($coches as $marca => $almacen) { 
        if($primero){
            $primero = false;
            echo "<tr>";
            echo "<th>Marca</th>";
            foreach ($almacen as $key => $value) {
                echo "<th>$key</th>";
            }
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td>$marca</td>";
        foreach ($almacen as $key => $value) {
            echo "<td>$key : $value</td>";    
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>