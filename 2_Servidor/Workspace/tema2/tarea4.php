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
        "jorge"=>["PHP"=>0,"Cliente"=> "5","Arte"=> "7"],
        "pablo"=>["PHP"=>10,"Cliente"=> "8","Arte"=> "9"],
        "gonzalo"=>["PHP"=>7,"Cliente"=>7,"Arte"=> 7],
];

//Se pinta las cabeceras añadiendo una fila:(<tr>)
// A continuación, se añade una columna con el string "Alumno" para alojar los valores del nombre del alumno
//Después, se recorre el array de asignaturas quedandonos sólo con la clave para obtener
//el nombre de cada asignatura
//Por ultimo se añade otra columna con el string "promedio" para alojar los valores del promedio
// y se cierra la fila (</tr>)

echo "<table border=1>";
$primero = true;
$suma=$promedio=0;

foreach ($clase as $alumno => $asignaturas) {
    if($primero){
        $primero = false;
        echo "<tr><th> Alumno </th>";
        foreach ($asignaturas as $key => $value) {
            echo "<th>$key</th>";
        }
        echo "<th>Promedio</th></tr>";
    }
    echo "<tr><td>$alumno</td>";
    if(is_array($asignaturas)){
        foreach ($asignaturas as $nombreAsignatura => $nota) {
            echo "<td>$nota</td>";
            $suma+=$nota;
        }
        $promedio=$suma/count($asignaturas);
        echo "<td>$promedio</td></tr>";
    }
}
echo "</table>"

?>
</body>
</html>