<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 2
    </title>
</head>
<body>
    <?php 
    $array=[1,2,3,4,5];
    $arrayclavevalor=["nombre"=>"Pablo","apellido"=>"Egea"];
    echo "1.";
    for ($i=0; $i <sizeof($array) ; $i++) {
        echo '<p>' .$array[$i]. '</p>';
    }
    echo "2.";
    foreach($array as $value) {
        echo "<p>$value</p>";
    }
    echo "3.";
    foreach($arrayclavevalor as $value) {
        echo "<p>$value</p>";
    }
    echo "4.";
    foreach($arrayclavevalor as $clave=>$valor) {
    echo "<p> El $clave es $valor</p>";
    }

    $arraymulti=[
        [2,3,4,5,6],
        [7,8,9,10],
        [10,11,12,13]
    ];
    echo "<h1> Primera manera de recorrer array multi</h1>";
    foreach($arraymulti as $value) {
        if (is_array($value)){
            foreach($value as $value2){
        echo "<p>$value2</p>";
            }
    }else echo"<p>$value</p>";
}
    echo "<h1> segunda manera de recorrer array multi</h1>";
    foreach($arraymulti as $value) {
        if (is_array($value)){
            foreach($value as $posicion=> $value2){
        echo "<p>$posicion : $value2</p>";
            }
    }else echo"<p>$value</p>";
}
    echo "<h1> Tercera manera de recorrer array multi</h1>";
    foreach($arraymulti as $value) {
        if (is_array($value)){
            for($i=0 ; $i<count($value) ; $i++){
        echo '<p>' .$value[$i]. '</p>';
            }
    }else echo"<p>$value</p>";
}
    $arraymulti2=[
        ["nombre"=>"Pablo","apellido"=>"Egea"],
        ["nombre"=>"Grx","apellido"=>"Bernal"],
        ["nombre"=>"Jon","apellido"=>"Franklin"]
    ];
    
        echo "<h1> Primera manera de recorrer array multi</h1>";
    foreach($arraymulti2 as $value) {
        if (is_array($value)){
            foreach($value as $value2){
        echo "<p>$value2</p>";
            }
    }else echo"<p>$value</p>";
}
    echo "<h1> segunda manera de recorrer array multi</h1>";
    foreach($arraymulti2 as $value) {
        if (is_array($value)){
            foreach($value as $posicion=> $value2){
        echo "<p>$posicion : $value2</p>";
            }
    }else echo"<p>$value</p>";
}

echo "<h1> EJERCICIO 1. </h1>";

    $arrayfrutas=[
        ["nombre"=> "pera","color"=> "verde"],
        ["nombre"=> "manzana","color"=> "rojo"],
        ["nombre"=> "platano","color"=> "amarillo"],
        ["nombre"=> "papaya","color"=> "naranja rojizo"],
];

foreach($arrayfrutas as $value) {
        if (is_array($value)){
            foreach($value as $posicion=> $value2){
        echo "<p>$posicion : $value2</p>";
            }
    }else echo"<p>$value</p>";
}


echo "<h1> EJERCICIO 2. </h1>";

$arraysemana=[
        ["num"=> "1","nombre"=> "Lunes"],
        ["num"=> "2","nombre"=> "Martes"],
        ["num"=> "3","nombre"=> "Miercoles"],
        ["num"=> "4","nombre"=> "Jueves"],
        ["num"=> "5","nombre"=> "Viernes"],
        ["num"=> "6","nombre"=> "Sabado"],
        ["num"=> "7","nombre"=> "Domingo"],
];

foreach($arraysemana as $value) {
        if (is_array($value)){
            foreach($value as $posicion=> $value2){
        echo "<p>$posicion : $value2</p>";
            }
    }else echo"<p>$value</p>";
}

echo "<h1>EJERCICIO 3.</h1>";

$arraynotas=[
        ["asignatura"=> "Web","nota"=> "10"],
        ["asignatura"=> "Cliente","nota"=> "7"],
        ["asignatura"=> "Servidor","nota"=> "8"],
        ["asignatura"=> "Sostenibilidad","nota"=> "5"],
        ["asignatura"=> "Css","nota"=> "7"],
        ["asignatura"=> "Php","nota"=> "9"],
        ["asignatura"=> "SI","nota"=> "8"],
];

foreach($arraysemana as $value) {
        if (is_array($value)){
            foreach($value as $posicion=> $value2){
        echo "<p>$posicion : $value2</p>";
            }
    }else echo"<p>$value</p>";
}

$alumnos=[
        "jorge"=>["php"=>0,"cliente"=> "5","arte"=> "7"],
        "pablo"=>["php"=>10,"cliente"=> "8","arte"=> "9"],
        "gonzalo"=>["php"=>7,"cliente"=>7,"arte"=> 7],
];



// Encabezados de la tabla (asignaturas)
foreach ($alumnos as $key => $value) {
    echo "$key";
}




?>
</body>
</html>