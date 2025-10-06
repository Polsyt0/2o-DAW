// Ejercicio 2: Solicitar al usuario un número entero mayor o igual a 0 y mostrar en un alert la secuencia de números desde 0 hasta ese número, separados por " - ".

let numero = parseInt(prompt("introduce un numero crack", ""));
if (isNaN(numero) || numero < 0) {
    alert("Error: introduce un número entero mayor o igual a 0.");
} else {
    let resultado = "";
    for (let i = 0; i <= numero; i++) {
        resultado += i;
        if (i < numero) resultado += " - ";
    }
    alert(resultado);
}

