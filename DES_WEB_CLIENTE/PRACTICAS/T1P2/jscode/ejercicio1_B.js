// CAPTURAMOS LOS ELEMENTOS DOS PRIMEROS DIV Y EL BOTON
let divIzquierdo = document.getElementById("ladoIzq");
let divDerecho = document.getElementById("ladoDer");

//CAPTURAMOS EL ULTIMO DIV
let divSalida = document.getElementById("salida");

//CAPTURACION BOTONES
let botones = document.querySelectorAll(".botones");

let btnGenerar = botones[0];
let btnComparar = botones[1];

// CREACION NUMEROS ALEATORIOS
let numAleatorio1 = 0;
let numAleatorio2 = 0;

let generadorConst = 0;

// FUNCION BTN GENERAR
btnGenerar.addEventListener("click", function(){
    
    // DESACTIVACION DEL BOTON AL PULSARLO 
    btnGenerar.disabled = true;
    btnComparar.disabled = false;
    
    generadorConst = setInterval(function (){
        numAleatorio1 = Math.floor(Math.random() * 50) + 1;
        numAleatorio2 = Math.floor(Math.random() * 50) + 1;

        // CREACION DE PARRAFO DENTRO DEL DIV Y ASIGNACION DE NUMERO (DIV IZQUIERDO)
        let num1 = document.createElement("p");
        num1.textContent = numAleatorio1;

        // CREACION DE PARRAFO DENTRO DEL DIV Y ASIGNACION DE NUMERO (DIV DERECHO)
        let num2 = document.createElement("p");
        num2.textContent = numAleatorio2;

        divIzquierdo.innerText = numAleatorio1;
        divDerecho.innerText = numAleatorio2;
    }, 1000);
})

btnComparar.addEventListener("click", function(){

    clearInterval(generadorConst);

    // DESACTIVACION DEL BOTON AL PULSARLO 
    btnGenerar.disabled = false;
    btnComparar.disabled = true;

    if (numAleatorio1 > numAleatorio2){
        let mayor = document.createElement("p");
        mayor.textContent = numAleatorio1;
        divSalida.textContent = numAleatorio1;
    }
    else{
        let menor = document.createElement("p");
        menor.textContent = numAleatorio2;
        divSalida.textContent = numAleatorio2;
    }
})