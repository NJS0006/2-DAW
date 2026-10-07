//Array
/*
// //Creación
// let lista = new Array(5);
let lista = new Array ("Nico", "Seta", 12, 43);


//Inicializar (for)
/* for (let i = 0; i < lista.length; i++) {
    lista[i] = 12;
}


//Añadir cajones solos
lista[3] = 9;
lista[6] = 6;

//Si le damos un valor a uno de los cajones que NO esta dentro de la longitud de la array (Este caso 5). JS le dará el valor "undefined" a todos los cajones anterior a este
lista[10] = 45;

//Sacar por pantalla
console.log(lista);
*/

//---------------//

let playlist = ["The Unforgiven II", "My Way"];

let cancion = {
    Artista: "Metallica",
    Duracion: "6:42"
};

for (let i = 0; i < playlist.length; i++) {
    console.log("Pista${i+1}: ${playlist[i]}"


        
    );
}

for (let tema  of playlist) {
    console.log("Reproduciendo: ${tema}");
}

for (let clave in cancion) {
    console.log("${clave}: ${cancion[clave]}");
    
}
