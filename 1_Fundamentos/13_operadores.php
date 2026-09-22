<?php
$salto = "<br>";
$_2saltos = "<br><br>";


$num1 = 40;
$num2 = 20;

echo "//OPERADORES BASICOS//" . $_2saltos;
echo "Suma: " . ($num1 + $num2) . $salto;
echo "Resta: " . ($num1 - $num2) . $salto;
echo "Mult: " . ($num1 * $num2) . $salto;
echo "Div: " . ($num1 / $num2) . $salto;
echo "Resto: " . ($num1 % $num2) . $salto;

echo ($_2saltos);

echo "//INCREMENTO Y DECREMENTO//" . $_2saltos; //(post y pre)

//INCREMENTO
$num3 = $num2++; //post-incremento
echo "Valor de num3 : $num3 | Valor de num2: $num2 $salto";

$num3 = ++$num2; //pre-incremento
echo "Valor de num3 : $num3 | Valor de num2: $num2 $salto";

echo "---------------";
echo ($salto);

//DECREMENTO
$num3 = $num2--; //post-decremento
echo "Valor de num3 : $num3 | Valor de num2: $num2 $salto";

$num3 = --$num2; //pre-decremento
echo "Valor de num3 : $num3 | Valor de num2: $num2 $salto";

echo ($_2saltos);

echo "//OPERADORES LOGICOS//" . $_2saltos;

//Mayor que
echo "Es num1 MAYOR QUE 10?: " . ($num1 > 10) . $salto;
//Mayor o igual
echo "Es num1 MAYOR O IGUAL a 3?: " . ($num1 >= 3) . $salto;
//O(||)
echo "Es num1 mayor que 60 o num3 menor o igual que num2?: " . (($num1 >= 100) || ($num3 <= $num2)) . $salto;

$numero = 12;
$cadena = "12";
$estrito = $numero == $cadena; //El compilador "debil" (o ==) compara unicamente valores entre dos varibales mientras que el compilador "estricto" (o ===) compara tanto valor como tipo
echo $estrito;
