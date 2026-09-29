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