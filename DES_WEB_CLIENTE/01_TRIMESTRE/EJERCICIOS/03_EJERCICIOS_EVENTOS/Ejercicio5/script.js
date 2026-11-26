const caja = document.getElementById("caja");
const tamaño = 100;
const paso = 20;

// Posicion aleatoria dentro del ancho y el alto visible 
const maxX = Math.max(0, window.innerWidth - tamaño);
const maxY = Math.max(0, window.innerHeight - tamaño);

let x = Math.floor(Math.random()* maxX);
let y = Math.floor(Math.random()* maxY);

function actualizarPosicion(){
    caja.style.left = x + "px";
    caja.style.top = y + "px";
}

actualizarPosicion();

document.addEventListener("keydown", (event) => {
    const limiteDerecho = window.innerWidth - tamaño;
    const limiteIzquierdo = window.innerHeight - tamaño;

    if(event.key === "ArrowUp"){
        y = Math.max(0, y - paso);
    } else if (event.key === "ArrowDown"){
        y = Math.min(limiteIzquierdo, y + paso);
    } else if (event.key === "ArrowLeft"){
        x = Math.max(0, x - paso);
    } else if (event.key === "ArrowRight"){
        x = Math.min(limiteDerecho, x + paso);
    } else{
        return;
    }

    actualizarPosicion();
});
