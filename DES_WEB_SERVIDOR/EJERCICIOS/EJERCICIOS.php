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



//EJERCICIO 2
/* Crea una funcion llamada notas que contenga un parametro decimal. Si la nota es menor que 5, se mostrara por pantalla la palabra "suspenso". Si la nota esta entre 5 y 6, se mostrara "Aprobado", si está entre 7 y 8 "Notable" y si es 9 o 10 "Sobresaliente" */

$numDec = 6.7;
function notas ($numDec){
    switch ($numDec){
        case ($numDec < 5):
            echo "El usuario está suspenso";
            break;
        case (($numDec >= 5) || ($numDec <= 6)):
            echo "El usuario está aprobado";
            break;
        case (($numDec >= 7) || ($numDec <= 8)):
            echo "El usuario tiene Notable";
            break;
        case ($numDec < 0):
            echo "No es posible una nota negativa (osea si pero no)";
            break;
        default:
            echo "La persona tiene un Sobresaliente"; 
    }
}



//EJERCICIO 3
/* Crear una función llamada meses que, dependiendo del número que entre y haciendo uso del match, devolverá el nombre del mes correspondiente. ¡¡IMPORTANTE!! Controlad que el número no sea menor a 1 o mayor a 12 */
$mes = 1;
function meses(){
    if(($mes < 1) && ($mes > 12)){
        echo "No hay menos de 1 mes, ni mas de 12 GLIPOLLAS";
    }
    else{
        $nombreMes = match ($mes) {
            1 => 'Enero',
            2 => 'Febrero',
            3 => 'Marzo',
            4 => 'Abril',
            5 => 'Mayo',
            6 => 'Junio',
            7 => 'Julio',
            8 => 'Agosto',
            9 => 'Septiembre',
            10 => 'Octubre',
            11 => 'Noviembre',
            default => 'DICIEMBRE',
        }
        echo $nombreMes;
    }
}



//EJERCICIO 4
/* Crea una función llamada calculadora que tenga 3 parámetros. Dos números y un string. Usar un switch para mostrar el resultado de la operación correspondiente. Las operaciones aceptadas serán: suma, resta, multiplicación y exponente. */

function calculadora($num, $num2, $palabra){
    $suma = $num + $num2;
    $resta = $num - $num2;
    $mult = $num * $num2;
    $expo = $num % $num2;

    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }
}