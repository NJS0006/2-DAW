//Matrices

//FORMA 1
/*
let una = new Array(5);
let dos = new Array(5);
let tres = new Array(5);

let total = new Array(una, dos, tres);

console.log(total);
*/


//FORMA 2
/*let matriz = [[],[],[]]
console.log(matriz);
let columnas = 3;

//RECORER
for (let i = 0; i < matriz.length; i++) {
    for (let j = 0; j < columnas; j++) {
        if (i%2 == 0) matriz[i][j] = 12;
        else matriz[i][j] = 1;
    }
}

console.log(matriz);
*/

/*
12, 12, 12
01, 01, 01
12, 12, 12

let matriz = [[],[],[]]
console.log(matriz);
let columnas = 3;

for (let i = 0; i < matriz.length; i++) {
    for (let j = 0; j < columnas; j++) {
        if (i%2 == 0) matriz[i][j] = 12;
        else matriz[i][j] = 1;
    }   
}

console.log(matriz);

*/

let numero = 6.856;

//numero = String(numero);
numero = numero.toString();

console.log(typeof(numero));

//CADENAS

let frase = "Sigue al conejo blanco, Neo";

let resultado = frase.split("a");

console.log(resultado);
