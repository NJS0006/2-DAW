function ejercicio2() {
    //Variable de guardado
    let N;
    
    //Variable de limite de pedida
    let numeroNotas = 0;

    //Variables de comprobacion de cantidad de notas
    let numSuspensos = 0;
    let numAprobados = 0;
    let numNotables = 0;
    let numSobresalientes = 0;

    //Bucle 
    do {
        let pedirNotas = prompt("Dame un nota");
        numeroNotas++;
        N = pedirNotas;
        
        //Condicion
        if(N < 5){
            numSuspensos++;
        }
        else if ((N >= 5)&&(N <= 6)){
            numAprobados++;
        }
        else if ((N >= 7)&&(N <= 8)){
            numNotables++;
        }
        else if ((N >= 9)&&(N <= 10)){
            numSobresalientes++;
        }

    }while(numeroNotas < 10);

    //Sacada por pantalla
    alert (`El numero de suspensos es: ${numSuspensos}` + "\n"
    + `El numero de Aprobados es: ${numAprobados}` + "\n"
    + `El numero de Notables es: ${numNotables}` + "\n"
    + `El numero de Sobresalientes es: ${numSobresalientes}`);
}