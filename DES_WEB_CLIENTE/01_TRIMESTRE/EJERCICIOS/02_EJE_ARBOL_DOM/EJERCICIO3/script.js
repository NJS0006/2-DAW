// CAPTURAMOS LOS ELEMENTOS
let div = document.getElementById("contador");
let btnSuma = document.getElementById("btnSuma");
let btnResta = document.getElementById("btnResta");

// VARIABLE NUMERICA APOYO
let numero = 0;

// BOTON SUMAR
btnSuma.addEventListener("click", function () {
    numero++;
    div.textContent = numero;
})

// BOTON RESTAR
btnResta.addEventListener("click", function () {
    numero--;
    div.textContent = numero;
})