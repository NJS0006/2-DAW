function AAA(){
    let num = parseInt(prompt("Dame un numero entero positivo"))
    do {
        let num = parseInt(prompt("Dame un numero entero positivo"))
        if (num <= 0){
            alert ("No puede ser un numero menor que cero");
        }
        else if (isNaN(num)){
            alert ("No puede ser una cadena");
        }
        else if (num%1 != 0){
            alert ("No puede ser numero decimal");
        }
    }while((num < 0) || (isNaN(num)));
    alert("Tu numero es el " + num)
}


