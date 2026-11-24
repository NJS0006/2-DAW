// Capturamos los elementos del DOM
let btnGenerar = document.getElementById("btnGenerar");
let barraProgress = document.getElementById("barraProgress");
let contadorMonedas = document.getElementById("contadorMonedas");
let mensajeEstado = document.getElementById("mensajeEstado");

// Variable numérica para llevar la cuenta de las monedas
let totalMonedas = 0;


btnGenerar.addEventListener("click", function() {
    // Bloquear el botón para evitar clics múltiples
    btnGenerar.disabled = true;
    mensajeEstado.textContent = "Grabando moneda...";
    
    // Aseguramos que la barra empiece en 0
    barraProgress.value = 0;

    // Iniciamos el temporizador para simular la carga (como en el ejercicio 16/17)
    let intervaloCarga = setInterval(function() {
        barraProgress.value += 2; // Incrementa de 2 en 2

        // Comprobamos si la barra ha llegado al 100%
        if (barraProgress.value >= 100) {
            // Paramos el intervalo
            clearInterval(intervaloCarga);

            // Sumar una moneda al contador y actualizar el HTML
            totalMonedas++;
            contadorMonedas.textContent = totalMonedas;

            // Mostrar mensaje de éxito
            mensajeEstado.textContent = "¡Moneda generada con éxito! 🪙";

            // Desbloquear el botón para permitir generar otra
            btnGenerar.disabled = false;
        }
    }, 40); // Velocidad de carga (cada 40 milisegundos)
});