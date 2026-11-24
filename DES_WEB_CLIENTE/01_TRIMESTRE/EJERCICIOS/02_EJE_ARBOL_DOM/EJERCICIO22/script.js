// 1. Capturamos el botón y el div del DOM
let btnAnadir = document.getElementById("btnAnadir");
let cajaDiv = document.getElementById("cajaDiv");

// 2. Inicializamos el contador en 1 (al recargar la página la variable se reinicia)
let contador = 1;

// 3. Añadimos el evento de clic al botón
btnAnadir.addEventListener("click", function() {
    // Creamos dinámicamente el nuevo nodo elemento <p>
    let nuevoParrafo = document.createElement("p");

    // Asignamos el texto correspondiente con el valor del contador
    nuevoParrafo.textContent = "Párrafo número " + contador;

    // Agregamos el nuevo párrafo como hijo dentro del <div>
    cajaDiv.appendChild(nuevoParrafo);

    // Incrementamos el contador para el siguiente clic
    contador++;
});