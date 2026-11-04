// Capturamos el botón y la lista del DOM
let btnAnadir = document.getElementById("btnAnadir");
let lista = document.getElementById("listaElementos");

// Evento al pulsar el botón 'Añadir'
btnAnadir.addEventListener("click", function() {
    // Pedir una cadena de texto al usuario mediante un prompt
    let textoUsuario = prompt("Introduce el texto para el nuevo elemento:");

    // Comprobamos que el usuario escribió algo y no canceló el prompt
    if (textoUsuario !== null && textoUsuario.trim() !== "") {
        
        // Crear dinámicamente un nuevo nodo elemento <li>
        let nuevoLi = document.createElement("li");

        // Asignar el texto introducido al nuevo elemento
        nuevoLi.textContent = textoUsuario;

        // Agregar el nuevo nodo hijo al final de la lista <ul>
        lista.appendChild(nuevoLi);
    }
});