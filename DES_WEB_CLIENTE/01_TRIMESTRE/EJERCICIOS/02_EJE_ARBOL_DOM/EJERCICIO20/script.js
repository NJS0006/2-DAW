// Accedemos al parrafo inicial y a los botones
let parrafoInicial = document.querySelector("p.uno");
let botones = document.querySelectorAll("button");

let btnGenerar = botones[0];
let btnBorrarViejo = botones[1];
let btnBorrarNuevo = botones[2];
let btnSustituir = botones[3];

// Hacemos un array para poder borrar despues todo a la vez
let todosParrafos = [];



// ============= //
// BOTON GENERAR //
// ============= //

btnGenerar.addEventListener("click", function(){
    let nuevoParrafo = document.createElement("p");

    nuevoParrafo.textContent = "Este es un nuevo parrafo";
    nuevoParrafo.className = "dos";

    // Añadimos el nuevo parrafo al body
    document.body.appendChild(nuevoParrafo);

    // Metemos el nuevo parrafo en nuestro array 
    todosParrafos.push(nuevoParrafo);

    //BorrarNuevos se desbloquea al pulsar "Generar"
    btnBorrarNuevo.disabled = false;
})



// ================== //
// BOTON BORRAR VIEJO //
// ================== //

btnBorrarViejo.addEventListener("click", function(){
    if (parrafoInicial && parrafoInicial.parentNode) {
        // Borramos el parrafo que hay en pantalla
        parrafoInicial.remove();

        parrafoInicial = null;

        // Bloqueamos los botones "Sustituir" y este mismo
        btnSustituir.disabled = true;
        btnBorrarViejo.disabled = true;
    }
});



// ================== //
// BOTON BORRAR NUEVO //
// ================== //

btnBorrarNuevo.addEventListener("click", function(){
    
    todosParrafos.forEach(function(parrafo){
        // Borramos todo lo que tenemos en nuestro array de parrafos
        parrafo.remove();
    });
    // Vaciamos el array de todos los parrafos
    todosParrafos = [];

    // Bloqueamos el boton
    btnBorrarNuevo.disabled = true;
})



// =============== //
// BOTON SUSTITUIR //
// =============== //

btnSustituir.addEventListener("click", function(){
    // Se ejecuta si Y SOLO SI esta el parrafo incial
    if (parrafoInicial && parrafoInicial.parentNode){

        // Creamos al estructura del nodo <table> desde js
        let tabla = document.createElement("table");

        // Creamos la primera fila con 2 celdas numericas
        let fila1 = document.createElement("tr");
        let td1 = document.createElement("td");
        td1.textContent = "1";
        let td2 = document.createElement('td');
        td2.textContent = "2";

        fila1.appendChild(td1);
        fila1.appendChild(td2);

        // Creamos la segunda fila con 2 celdas numéricas
        const fila2 = document.createElement('tr');
        const td3 = document.createElement('td');
        td3.textContent = '3';
        const td4 = document.createElement('td');
        td4.textContent = '4';
        fila2.appendChild(td3);
        fila2.appendChild(td4);

        // Ensamblamos las filas dentro de la tabla.
        tabla.appendChild(fila1);
        tabla.appendChild(fila2);

        // 2. Reemplazamos el párrafo inicial por la tabla creada.
        // replaceChild(nuevoNodo, nodoAComprobarOReemplazar) necesita invocarse sobre el nodo PADRE.
        parrafoInicial.parentNode.replaceChild(tabla, parrafoInicial);

        // Al sustituirse el párrafo inicial, deja de existir. 
        // Por coherencia, asignamos null a la referencia y bloqueamos los botones correspondientes.
        parrofoInicial = null;
        btnBorrarViejo.disabled = true;
        btnSustituir.disabled = true;
    }
})