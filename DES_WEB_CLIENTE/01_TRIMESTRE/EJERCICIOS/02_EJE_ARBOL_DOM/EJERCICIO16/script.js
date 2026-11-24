let mensaje = document.getElementById("mensajeAlerta");

// COGEMOS LAS VARIABLES DE METER
let barraM = document.getElementById("barraMeter");
let botonM = document.getElementById("btnMeter");

// FUNCION BOTON METER
botonM.addEventListener("click", function () {
    botonM.disabled = true;

    let intervaloM = setInterval(function () {

        // AUMENTO DE LA CANTIDAD DE LA BARRA
        barraM.value += 1;

        // CONDICION FINALIZACION
        if (barraM.value >= 100) {

            // PARADA INTERVALO
            clearInterval(intervaloM);

            // ACTIVA EL BOTON OTRA VEZ
            botonM.disable = false;

            // MENSAJE FINALIZACION
            mensaje.innerText = "Descarga Meter completada!"
        }
    }, 20);
})



// COGEMOS LAS VARIABLES PROGRESO
let barra = document.getElementById("barraProgress");
let boton = document.getElementById("btnProgress");

// FUNCION BOTON PROGRESO
boton.addEventListener("click", function () {

    boton.disabled = true;

    // CREAMOS EL INERVALO
    let intervalo = setInterval(function () {

        // SUBIDA DE VALOR A LA BARRA
        barra.value += 1;

        // CONDICION DE CIERRE
        if (barra.value >= 100) {

            // PARAMOS EL INTERVALO
            clearInterval(intervalo);

            // ACTIVAR EL BOTON CUANDO TERMINA
            boton.disable = false;

            // MENSAJE DE FINALIZCIÓN
            mensaje.innerText = "Descarga Progress completada!";
        }
    }, 20); // SE REPITE CADA 50 MILISEG
})

