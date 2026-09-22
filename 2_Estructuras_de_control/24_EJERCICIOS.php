<?php

//EJERCICIO 1
/* Crea una funcion llamada "edad" que haciendo uso de la estructura de control switch muestre por pantalla si una persona es menor de edad, adulta, jubilada o anciana. Adulta (18-67 años) y jubilada (67>). hacer una llamada a la funcion con u numero random del 1 al 100. 
IMPORTANTE: Controlar que el numero NUNCA pueda ser negativo. */

$numRand = rand(1, 100);
function edad ($numRand){
    switch ($numRand){
        case ($numRand < 18):
            echo "El usuario es menor de edad";
            break;
        case (($numRand >= 18) || ($numRand <= 67)):
            echo "El usuario es adulto";
            break;
        case ($numRand < 0):
            echo "El usuario NO PUEDE SER MENOR DE 0 AÑOS. Que eres gilipollas?";
            break;
        default:
            echo "La persona es jubilada";
    }
}