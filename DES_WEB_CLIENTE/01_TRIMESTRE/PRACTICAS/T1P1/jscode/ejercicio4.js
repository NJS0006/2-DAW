function ejercicio4() {
    //Cremos el array
    let matriz = [[],[],[]];

    //Llenamos el array de numeros aleatorios entre 2 y 20
    for (let i = 0; i <= 3; i++) {
        //Math.random
        let numAletorios = Math.floor(Math.random() * (20 - 2 + 1)) + 2;
        matriz[i].push(numAletorios);
        
        for (let j = 0; j <= 3; j++) {
            let numAletorios = Math.floor(Math.random() * (20 - 2 + 1)) + 2;
            matriz[j].push(numAletorios);
        }
    }
}

console.log(ejercicio4);