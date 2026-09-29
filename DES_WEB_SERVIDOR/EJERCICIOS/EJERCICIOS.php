<?php
$salto = "<br>";
$dobleSalto = "<br><br>";
?>

<?php
echo "//EJERCICIO 1// <br>";
echo "Crea una funcion llamada edad que haciendo uso de la estructura de control switch muestre por pantalla si una persona es menor de edad, adulta, jubilada o anciana. Adulta (18-67 años) y jubilada (67>). hacer una llamada a la funcion con u numero random del 1 al 100. 
IMPORTANTE: Controlar que el numero NUNCA pueda ser negativo.";

echo $salto;
echo '-----';
echo $salto;

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

?>

<?php
echo $dobleSalto;
echo '---------------';
echo $dobleSalto;
?>

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

<?php
echo $dobleSalto;
echo '---------------';
echo $dobleSalto;
?>

<?php
echo '//EJERCICIO 3// <br>';
echo 'Crear una función llamada meses que, dependiendo del número que entre y haciendo uso del match, devolverá el nombre del mes correspondiente. ¡¡IMPORTANTE!! Controlad que el número no sea menor a 1 o mayor a 12 ';

echo $salto;
echo '-----';
echo $salto;

function meses ($numeroMes){
    return match ($numeroMes) {
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
        12 => 'Diciembre',
        default => 'El mes no puede ser ni menor que 1 ni mayor que 12 (gilipollas)'
    };
}
echo meses(24);
?>

<?php
echo $dobleSalto;
echo '---------------';
echo $dobleSalto;
?>

<?php
echo "//EJERCICIO 4// <br>";
echo "Crea una función llamada calculadora que tenga 3 parámetros. Dos números y un string. Usar un switch para mostrar el resultado de la operación correspondiente. Las operaciones aceptadas serán: suma, resta, multiplicación y exponente.";
echo $salto;
echo '-----';
echo $salto;

function calculadora($num1, $num2, $operacion){
    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            echo "El resultado de la suma de $num1 y $num2 es: $resultado";
            break;

        case 'resta':
            $resultado = $num1 - $num2;
            echo "El resultado de la resta de $num1 y $num2 es: $resultado";
            break;

        case 'multiplicacion':
            $resultado = $num1 * $num2;
            echo "El resultado de la multiplicacion de $num1 y $num2 es: $resultado";
            break;

        case 'exponente':
            $resultado = $num1 ** $num2;
            echo "El resultado del exponente de $num1 y $num2 es: $resultado";
            break;
        
        default:
            echo "Operacion no valida";
            break;
    }
}
calculadora(34, 12, "multiplicacion");
?>

<?php
echo $dobleSalto;
echo '---------------';
echo $dobleSalto;
?>

<?php  
echo "//EJERCICIO 5 <br>";
echo "Crea una función llamada analizarNumero(int n, int min, int max):string que devuelva fuera de rango si n es manor del rango minimo o n es mayor del rango maximo. Si está dentro del rango indicar si es par o impar, y ademas, si está en los bordes.";
echo $salto;
echo '-----';
echo $salto;


?>