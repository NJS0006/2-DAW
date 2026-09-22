<?php
    /*

        ESTRUCTURA DE UN MATCH:

        LA COMPARACION ES SIEMPRE ESTRICTA (===)

        $res = match($numero){
            1 => "Se ha escogido la primera opcion",
            2 => "Se ha escogido la segunda opcion",
            3 => "Se ha escogido la tercera opcion",
        };
    */

    //2 => El martes es par
    //5 => El viernes es impar

    $numero = 2;
    $res = match($numero){
        2 === "El martes es par",
        5 === "El vierenes es impar"
    };