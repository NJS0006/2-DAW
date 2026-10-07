//Crea una funcion que reciba un array (del tamaño que sea) y un numero, A continuacion, la funcion debe devolver el numero de veces que aparece ese numero en el array y la PRIMERA aparicion de este.

function ejercicio2 (array, num){
    let contador = 0;
    let aparicion = -1;

    for (let i = 0; i < array.length; i++) {
        if(array[i] === num){
            contador++;

            if(aparicion === 0){
                aparicion = i;
            }
        }
        retirn [contador, aparicion];
    }
}

