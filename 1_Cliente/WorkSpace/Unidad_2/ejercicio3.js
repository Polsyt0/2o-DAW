/*Number(numero) → convierte lo introducido a número (mantiene decimales).
isNaN(numero) → comprueba que realmente es un número.
Number.isInteger(numero) → comprueba que no tenga decimales.
Escribe un programa en JavaScript que:
Pida al usuario un número entero.
Diga si el número es positivo, negativo o cero.
Además, indique si es divisible por 3.
El programa termina cuando el usuario introduce el número 0. */

let numero;

do {
    let input = prompt("Introduce un número entero (0 para salir):");
    numero = Number(input);

    if (isNaN(numero) || !Number.isInteger(numero)) {
        alert("Por favor, introduce un número entero válido.");
        continue;
    }

    if (numero === 0) {
        alert("Programa terminado.");
        break;
    }

    let mensaje = "";

    if (numero > 0) {
        mensaje += "El número es positivo. ";
    } else if (numero < 0) {
        mensaje += "El número es negativo. ";
    }

    if (numero % 3 === 0) {
        mensaje += "Es divisible por 3.";
    } else {
        mensaje += "No es divisible por 3.";
    }

    alert(mensaje);

} while (numero !== 0);

