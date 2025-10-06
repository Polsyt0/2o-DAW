

    let nombre = prompt("¿Cúal es tu nombre?", "Introduce tu nombre aqui...");
    let edad = prompt("Cual es tu edad?","");
    let confirmacionnombre = confirm(`es tu nombre ${nombre}?`);
    let confirmacionedad = confirm(`y tu edad ${edad}?`);


alert(`Tu nombre es ${nombre} y tu edad es ${edad}`);

let horoscopo = prompt("Cual es tu horoscopo?", "");

Document.write("<h1>Tu nombre es ${nombre}, tu edad es ${edad} y tu horoscopo es ${horoscopo}, el cual indica que vas a tener mucha suerte en el amor pero no te fies de nadie perro.</h1>");

document.close();