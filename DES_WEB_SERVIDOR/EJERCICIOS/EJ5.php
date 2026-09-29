<?php  
echo "//EJERCICIO 5// <br>";
echo "Crea una función llamada analizarNumero(int n, int min, int max):string que devuelva fuera de rango si n es manor del rango minimo o n es mayor del rango maximo. Si está dentro del rango indicar si es par o impar, y ademas, si está en los bordes.";
echo $salto;
echo '-----';
echo $salto;

function analizarNumero($n, $min, $max){
    if(($n > $min)&&($n < $max)){
        if($n % 2 == 0){
            echo "El numero es par";
        }else{
            echo "El numero es impar";
        }
    }else{
        echo "El numero esta fuera del rango";
    }
}
analizarNumero(30, 23, 45);
?>