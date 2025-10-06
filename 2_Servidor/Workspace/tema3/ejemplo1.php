<?php 
function incremento (&$numero){
    $numero++;
    echo "el valor dentro de la funcion es: $numero <br>";
}

$valor = 7;
incremento($valor);
echo "el valor fuera de la funcion es $valor <br>";

// --------------------------------------------------------------------

function cumpleanios(&$edad){
    $edad++;
    return($edad >= 18);

}

$edad = 17;
$mayor_edad = false;
echo "la edad antes del cumpleaños es $edad<br>";

$mayor_edad = cumpleanios($edad);
if ($mayor_edad){
    echo "es mayor de edad y su edad es $edad";
}else {
    echo "es menos de edad y su edad es $edad";
}

// --------------------------------------------------------------------

function pinta($array){
    foreach ($array as $value) {
        if(is_array($value)){
            foreach ($value as $valor) {
                echo "<p> $valor </p>";
            }
        }else echo "<p> $value</p>";
    }
}

$colores= ["azul",
        ["negro", "blanco"],
        "rojo"];

pinta($colores);

// --------------------------------------------------------------------

function suma(){
    var_dump(func_num_args());
    var_dump(func_get_args());
}
suma (2,3,4,5,6);
echo "<br>";
echo "<br>";

// --------------------------------------------------------------------

function recursiva($valor){
    if ($valor < 20 ){
        $siguiente=$valor+1;
        recursiva ($siguiente);
    }
    echo "$valor<br>";
}

recursiva (5);

// --------------------------------------------------------------------

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
