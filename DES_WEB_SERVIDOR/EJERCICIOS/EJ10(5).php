<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 10(5)</title>
</head>
<body>
    <h2>EJERCICIO 10 (5)</h2>
    <p>Crea una función que reciba un número y dos límites eenteros. Rechaza límites invertidos. Recorre el intervalo con for y muestra solo las operaciones cuyo resultado sea par; calcula cuántas has mostrado y la suma de sus resultados.</p>

    <?php 
        function ejercicio10 ($num, $min, $max){
            //Rechazo limites invertidos
            if ($num < $min){
                echo "El numero no puede ser menor que el minimo (gilipollas)";
            }
            else if ($num > $max){
                echo "El numero no puede ser mayor que el maximo (gilipollas)";
            }

            echo "Los numeros pares son: <br>";

            $contador = 0;
            $sumaTotal = 0;

            //Bucle for
            for ($i = $min; $i <= $max; $i++){
                if($num % 2 == 0){
                    echo "$num <br>";
                    $contador++;
                    $sumaTotal += $num;
                }
            }
            echo "<br> Se han contado un total de: $contador numeros <br>";
            echo "<br> La suma total de todos esos numeros es: $sumaTotal <br>";
        }

        ejercicio10(4, 5, 40)

    ?>
</body>
</html>