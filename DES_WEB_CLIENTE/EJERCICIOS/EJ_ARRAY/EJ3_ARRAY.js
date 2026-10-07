//Crea una funcion que reciba una matriz de cualquier tamaño y devuleva True o False si la matriz es simetrica o no.

//Una matriz es simetrica si cada elemento en la posicion [i][j] tiene el mismo valor para la posicion [j][i]

function arrayEJ3(matriz){
    for (let i = 0; i < matriz.length; i++) {
        for (let j = 0; j < matriz.length; j++) {
            if(matriz[i][j] !== matriz[j][i]){
                return false;
            }
        }
    }
    return true;
}

const matriz = [
    [1, 2, 3],
    [2, 0, 5],
    [3, 5, 6]
];

console.log(arrayEJ3(matriz));