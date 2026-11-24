function ejercicio3() {

    //variable de guardado
    let N;

    //Variable numero de cajones
    let longArray = 0;

    //Creacion del Array
    let array = [];

    //Bucle de pedida
    do {
        let numPedida = prompt("Dame numeros");
        N = numPedida;

        if (N > 0){
            longArray++; 
        }
        
        for (let i = 0; i < longArray; i++) {
            array[i] = N;
        }
    } while(N > 0);

    alert (`Los numeros del array son: ` + array + " ");

    alert (array.length);
}