<?php
echo '//EJERCICIO 2// <br>';
echo "Crea una funcion llamada notas que contenga un parametro decimal. Si la nota es menor que 5, se mostrara por pantalla la palabra suspenso. Si la nota esta entre 5 y 6, se mostrara Aprobado, si está entre 7 y 8 Notable y si es 9 o 10 Sobresaliente";

echo $salto;
echo '-----';
echo $salto;

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
notas(6.4);
?>