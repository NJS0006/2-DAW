// CAPTURAMOS EL ELEMENTO
let imagen = document.getElementById("imagenRollover");

// CAPTURAMOS Y COGEMOS LAS IMAGENES
let imagenOriginal = "/DES_WEB_CLIENTE/EJERCICIOS/02_EJE_ARBOL_DOM/EJERCICIO4/IMG/foto5.png"
let imagenSecundaria = "/DES_WEB_CLIENTE/EJERCICIOS/02_EJE_ARBOL_DOM/EJERCICIO4/IMG/foto4.png"

// HACEMOS LOS EVENTOS ENTRADA
imagen.addEventListener("mouseover", function () {
    imagen.src = imagenSecundaria;
})

// HACEMOS EVENTO DE SALIDA
imagen.addEventListener("mouseout", function () {
    imagen.src = imagenOriginal;
})