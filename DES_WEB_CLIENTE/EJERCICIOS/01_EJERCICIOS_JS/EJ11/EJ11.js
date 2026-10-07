function ej11(arr1, arr2){
    
    let todo = arr1.concat(arr2);
    console.log(todo);
    let salida = [];
    
    for (let i = 0; i < todo.length; i++) {
        let veces = 0;
        for (let j = 0; j < todo.length; j++) {
            if (todo[j] == todo [i]){
                veces++;
            }
        }
        if (veces == 1) salida.push(todo[i]);
    }

    console.log(salida);
    
}

let lista = [1, 2, 3, 3];
let otra = [3, 2, 1, 4, 5];

ej11(lista, otra);