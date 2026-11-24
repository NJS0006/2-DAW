// Capturamos los botones, el mensaje y los 4 divs corredores
let btnCorrer = document.getElementById("btnCorrer");
let btnReset = document.getElementById("btnReset");
let mensajeGanador = document.getElementById("mensajeGanador");

let divs = [
    document.getElementById("div1"),
    document.getElementById("div2"),
    document.getElementById("div3"),
    document.getElementById("div4")
];

let intervalos = [];
let carreraTerminada = false;

// 1. Evento para iniciar la carrera al pulsar CORRER
btnCorrer.addEventListener("click", function () {
    if (carreraTerminada) return;

    btnCorrer.disabled = true;
    mensajeGanador.textContent = "¡Hagan sus apuestas!";

    // Calculamos la meta a ojo basándonos en el ancho de la ventana
    let meta = window.innerWidth - 180;

    // Recorremos cada div para asignarle una velocidad aleatoria independiente
    divs.forEach(function (div) {
        // Velocidad aleatoria distinta en cada carrera (entre 2 y 8 px por tick)
        let velocidad = Math.floor(Math.random() * 7) + 2;
        let posicionActual = 0;

        let idIntervalo = setInterval(function () {
            posicionActual += velocidad;
            div.style.left = posicionActual + "px";

            // Comprobamos si este div cruza la meta el primero
            if (posicionActual >= meta && !carreraTerminada) {
                carreraTerminada = true;
                mensajeGanador.textContent = `¡El ${div.textContent} ha ganado la carrera! `;

                // Detenemos los intervalos de todos los corredores para congelar la carrera
                intervalos.forEach(clearInterval);
            }
        }, 30);

        // Guardamos el identificador del intervalo para poder limpiarlo después
        intervalos.push(idIntervalo);
    });
});

// 2. Evento para resetear todo y volver a empezar
btnReset.addEventListener("click", function () {
    // Paramos cualquier intervalo activo
    intervalos.forEach(clearInterval);
    intervalos = [];
    carreraTerminada = false;

    // Devolvemos los divs a su posición inicial (izquierda a 0)
    divs.forEach(function (div) {
        div.style.left = "0px";
    });

    // Reactivamos el botón de correr y limpiamos el mensaje
    btnCorrer.disabled = false;
    mensajeGanador.textContent = "";
});