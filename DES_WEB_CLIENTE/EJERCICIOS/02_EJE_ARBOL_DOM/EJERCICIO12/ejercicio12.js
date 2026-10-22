let posicionX = 0;
const elemento = document.getElementById('imagenDiv');

// Apartado B
const limite_izq = 0;
const limite_derecha = 1200;

// Apartado A
function moverDerecha() {
    if (posicionX < limite_derecha){
        posicionX += 5; //Restar 5
        elemento.style.left = posicionX + "px";
    }
}

function moverIzquierda(){
    if (posicionX > limite_izq){
        posicionX -= 5; //Sumar 5
        elemento.style.left = posicionX + "px";
    }        
}