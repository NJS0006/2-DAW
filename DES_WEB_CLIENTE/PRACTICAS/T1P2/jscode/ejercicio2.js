// CAPTURAMOS LOS OBJETOS
let div = document.getElementById("contenedor");

// ARRAY DE FOTOS
let fotos = ["img/aurora.jpg", "img/gadget.jpg", "img/gideon.jpg", "img/muriel.jpg", "img/steel.jpg", "img/terra.jpg"];


// CAPTURA BOTONES
let botones = document.getElementsByTagName("input");

let btnAñadir = botones[0];
let btnLimpiar = botones[1];

// FUNCIONES
btnAñadir.addEventListener("click", function(){
    
    let pedida = prompt("Dime que imagen quieres");

    let imagen = document.createElement("img");
    imagen = pedida;
    console.log(imagen);

    div.classList.add("foto");
    foto.src = fotos[imagen];
    
})
