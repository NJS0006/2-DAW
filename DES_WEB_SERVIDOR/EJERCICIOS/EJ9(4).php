<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 9 (4)</title>
</head>
<body>
    <h2>EJERCICIO 9 (4)</h2>
    <p>Genera números enteros del 1 al 20 con un do-while y acumúlalos. Si superas el 100 sin haber alcanzado exactamente el número 100 entonces el bucle termina y tienes que mostrar el número en el que te has quedado y dibujar la fuente de la frase en rojo si es par y en azul si impar. En el caso en el que hayas llegado exactamente al 100, entonces seguirás iterando hasta llegar o sobrepasar el 150. En este caso colorearás en verde la frase final si el número es par y en morado si es impar</p>

    <?php
        //Hacer el bucle
        $numTotal = 0;
        do{
            $numAleatorio = random_int(1, 20);
            $numTotal += $numAleatorio;
            echo "$numTotal <br>";
        }while($numTotal < 100);

        //Caso de si llega a 100
        if($numTotal == 100){
            //Segundo bucle (segunda parte del ejercicio)
            do{
                $numAleatorio = random_int(1, 20);
                $numTotal += $numAleatorio;
                echo "$numTotal <br>";
            }while($numTotal < 150);
            
            //Condicion si sobre-pasa los 150 y es par/impar
            if(($numTotal > 150)&&($numTotal % 2 == 0)){
                echo "<p style='color: green;'>El numero es el $numTotal (ha supedado el 150 y es par)</p>";
            }
            else if ($numTotal % 2 != 0){
                echo "<p style='color: purple;'>El numero es el $numTotal (ha supedado el 100 y es impar)</p>";
            }
        }
        //Condicion si el numero sobre-pasa el 100 y es par/impar
        else if(($numTotal > 100)&&($numTotal % 2 == 0)){
            echo "<p style='color: red;'>El numero es el $numTotal (ha supedado el 100 y es par)</p>";
        } 
        else if ($numTotal % 2 != 0){
            echo "<p style='color: blue;'>El numero es el $numTotal (ha supedado el 100 y es impar)</p>";
        }
        
    ?>
</body>
</html>