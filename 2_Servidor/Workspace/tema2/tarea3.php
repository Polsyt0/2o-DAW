<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $coches=[["marca"=>"audi","vendidos"=>18,"stock"=>5],
        ["marca"=>"volkswagen","vendidos"=>20,"stock"=>2],
        ["marca"=>"hyundai","vendidos"=>15,"stock"=>7],
        ["marca"=>"seat","vendidos"=>1,"stock"=>19]];
        echo "<table border=1>";
        $primero=true;
        foreach ($coches as $marca) {
            if (is_array( $marca )) {
            if ($primero) { 
                $primero =false;
            echo "<tr>";
            foreach ($marca as $key => $value) {
                echo " <th>$key </th> ";
            }
            echo "</tr>";
        }
        echo"<tr>";
        foreach ($marca as $key => $value) {
            echo "<td> $value </td>";
        }
        echo"</tr>";
        }
    }
        echo "</table>";
    ?>
</body>
</html>