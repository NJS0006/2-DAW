<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 6</title>
</head>
<body>
    <h2>EJERCICIO 1</h2>
    <p>Con while, recorre desde 150 hasta 0. Muestra los pares que no sean multiplos de 6. Calcula su cantidad, su suma y la media</p>
    
    <?php
        $num = 150;
        $cont = 0;
        $suma = 0;
        
        while ($num >= 0){
            if(($num % 2 == 0) && ($num % 6 != 0)) {
              echo "$num <br>";
              $cont++;
            }
            $num--;
            $suma = $suma + $num;  
        }
        
        $media = $suma / $cont;

        echo "<br>Hay un total de (contador): $cont<br>";
        echo "La suma de todos los numeros es (suma): $suma<br>";
        echo "La media es (media): $media<br>";
    ?>
</body>
</html>