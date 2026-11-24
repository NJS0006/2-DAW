function ejercicio1(){
    //Variable para guardar el numero introducido
    let N;

    //Bucle de pedida
    do{
        let pedidaNumero = parseInt(prompt("Dame un numero entero positivo"));
        N = pedidaNumero;
    }while ((isNaN(N))||(N < 0)||(N%1 != 0));

    //Condicion de salida
    if((N % 2 == 0) && (N / 10000 > 1) && (N / 10000 < 10)){
        alert ("El numero es un numero MEDAC");
    }
    else{
        alert ("EL numero NO ES un numero MEDAC")
    }
}