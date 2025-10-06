<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $clase=[
        ["Nombre"=>"Jorge","PHP"=>0,"Cliente"=> "5","Arte"=> "7"],
        ["Nombre"=>"Pablo","PHP"=>10,"Cliente"=> "8","Arte"=> "9"],
        ["Nombre"=>"Gonzalo","PHP"=>7,"Cliente"=>7,"Arte"=> 7],
];
echo "<table border=1>";
foreach ($clase as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $posicion => $value2) {
            echo "<tr><td>$posicion</td>";
            echo "<td>$value2</td></tr>";
        }
    }else echo "<tr><td> $value </td></tr>";
}
echo "</table>";

// INTENTO FINAL 

$suma=$promedio=$asignaturas=0;
foreach ($clase as $alumno) {
    if (is_array($alumno)){
        foreach ($alumno as $key => $value) {
            echo "$key:$value<br>";
                if(is_numeric($value)){
                    $suma += $value;
                    $asignaturas++;
                }
        }
        $promedio = round($suma/$asignaturas,2);
        echo "El promedio es $promedio <br>";
        $suma=$asignaturas=0;   
    }
}
?>
</body>
</html>