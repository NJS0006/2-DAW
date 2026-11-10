<?php
echo '//EJERCICIO 2// <br>';
echo "Crea una funcion llamada notas que contenga un parametro decimal. Si la nota es menor que 5, se mostrara por pantalla la palabra suspenso. Si la nota esta entre 5 y 6, se mostrara Aprobado, si está entre 7 y 8 Notable y si es 9 o 10 Sobresaliente";

echo "<br>";
echo '-----';
echo "<br>";

function notas ($parDecimal){
    switch ($parDecimal){;
        case ($parDecimal < 5):
            echo "El alumno está suspenso";
            break;
        case (($parDecimal >= 5) && ($parDecimal <= 6)):
            echo "El alumno está aprobado";
            break;
        case (($parDecimal >= 7) && ($parDecimal <= 8)):
            echo "El alumno está en Notable";
            break;
        case (($parDecimal >= 9)&&($parDecimal <= 10)):
            echo "El alumno esta Sobresaliente";
            break;
        default:
            echo "No es una nota validad y/o esta fuera del limite";
    };
}

notas();
?>