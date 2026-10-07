//Crea una funcion que reciba un array (del tamaño que sea) y un numero, A continuacion, la funcion debe devolver el numero de veces que aparece ese numero en el array y la PRIMERA aparicion de este.

function arrayEJ2 (array, num){
    let contador = 0;
    let priAparicion = 0;

    for (let i = 0; i < array.length; i++) {
        if (array[i] === num){
            contador++;

            if(priAparicion === 0){
                priAparicion = i;
            }
        }

    }
    
    return [contador, priAparicion];
}

const numeros = [4, 8, 15, 8, 23, 8, 42];
const resultado = arrayEJ2 (numeros, 8);

console.log(resultado);