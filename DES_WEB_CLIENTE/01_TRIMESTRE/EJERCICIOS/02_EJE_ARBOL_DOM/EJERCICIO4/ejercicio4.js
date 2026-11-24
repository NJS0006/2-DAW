let btnAnterior = document.getElementById("btnAnterior");
let btnSiguiente = document.getElementById("btnSiguiente");
let imagen = document.getElementById("imagenes")

let fotos = ["IMG/foto1.png", "IMG/foto2.png", "IMG/foto3.png", "IMG/foto4.png", "IMG/foto5.png"];
let indice = 0;


btnSiguiente.addEventListener("click", function () {
    indice++;
    imagenes.src = fotos[indice];

    if (indice == (fotos.length - 1)) {
        btnSiguiente.disabled = true;
    }

    if (indice > 0){
        btnAnterior.disabled = false;
    }
})

btnAnterior.addEventListener("click", function () {
    indice--;
    imagenes.src = fotos[indice];

    if (indice == 0) {
        btnAnterior.disabled = true;
    }

    if (indice > 0){
        btnSiguiente.disabled = false;
    }
})