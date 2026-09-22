<?php

    //ESTRUCTURA DE UN SWITCH
    /*switch(valor de una varibale){
        case primer_posible_valor:
            ......
            break;
        case segundo_posible_valor:
            ......
            break;
        default:
            ......
    }
    */
    
    $dia = "lunes";
    switch ($dia){
        case "finde":
            echo "<p>VAMOOOOS</p>";
            break;
        default:
            echo "<p>Me encantan los $dia</p>";
    }

    //Vamos a tratar con dos numeros: 
    //En el PRIMER CASE entraremos si y solo si el primer numero es mayor o igual que el segundo O el segundo numero es menos o igual 2. SEGUNDO CASE entraremos si y solo si el primer numero es menor que el segundo, y el segundo es igual a cinco veces el primero entre dos. Tenemos en DEFAULT en cuyo pondremos "no se cumple ninguna de la otras dos condiciones".
    $num1 = 2;
    $num2 = 4;
    switch (true){
        case (($num1 >= $num2) || $num2 <= 2):
            echo "Primer case";
            break;
        case (($num1 < $num2) && ($num2 == (($num1 * 5)/2))):
            echo "Segunco case";
            break;
        default:
            echo "No se cumple ninguna condicion";
    }


    //Comprueba con switch si un numero aleatorio del 1 al 100 es par o impar
    //El switch devolvera un echo especificando la paridad dentro de una etiqueta H3

    $numAle = rand(1,100);
    switch (true){
        case ($numAle % 2 == 0):
            echo "<h3>El numero es par</h3>";
        default:
            echo "<h3>Si no es par que coño va a ser gilipollas?</h3>";
    }
