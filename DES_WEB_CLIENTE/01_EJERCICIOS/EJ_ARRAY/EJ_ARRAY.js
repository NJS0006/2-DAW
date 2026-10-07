/*
Crea UN BOTON en HTML y asocia la funcion qeue hay abajo.
    - Pide DOS NUMEROS enteros (a y b)
    - Descubrir cual es el mayor y cual es el menor
    - Crea un array con valores que van desde el menor hasta el mayor
    
    Ejemplo:
    Menor = 2
    Mayor = 7
    Crea el array [2, 3, 4, 5, 6, 7]
*/

function crearArray(){
    //Pedida
    let num1 = parseInt(prompt("Dame el primer numero"));
    let num2 = parseInt(prompt("Dame el segundo numero"));

    //Suma total
    let total = num1 + num2;

    //Comprobacion
    if (num1 > num2){
        alert ("Mayor: " + num1 + "\nMenor: " + num2);
    }else{
        alert ("Mayor: " + num2 + "\nMenor: " + num1);
    }

    //Array
    let array = [suma];
    for (let i = 0; i < array.length; i++) {
        alert (num1 + array[i] + (array.length)-1);
    }
}