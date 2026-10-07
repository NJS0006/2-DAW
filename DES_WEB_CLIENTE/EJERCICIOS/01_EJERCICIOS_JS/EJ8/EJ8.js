//Creamos la funcion 
function ejercutarArray(){
    //Cremos el array
    let numeros = [];
    //Llenamos el array de numeros aleatorios entre 1 y 50
    for (let i = 0; i < 10; i++) {
        //Math.random
        let numAletorios = Math.floor(Math.random() * 50) + 1;
        numeros.push(numAletorios);
    }

    //Mostramos por consola el array
    console.log("Array generado:" . numeros);
    
    //Pedir a la persona un numero entero positivo
    let entrada = prompt("Introduce un numero entero positivo para buscar en el array");
    //Pasarlo a numero entero, indiscutiblemente de lo que meta
    let numeroUsuario = parseInt(entrada);

    //Validacion de que sea un numero y positivo
    if(NaN(numeroUsuario) || numeroUsuario <= 0){
        alert("Porfavor introduzca un numero entero positivo valido");
        return;
    }

    //Comprobar usando la funcion enArray() y mostrar mensaje
    let encontrado = enArray(numeros, numeroUsuario);

    if(encontrado){
        log (`El numero ${numeroUsuario} SI esta en el array`);
    }
    else{
        alert (`El numero ${numeroUsuario} NO esta en el array`);
    }
}