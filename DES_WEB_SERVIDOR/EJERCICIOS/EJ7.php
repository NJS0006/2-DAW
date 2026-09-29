<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 7</title>
</head>
<body>
    <h2>EJERCICIO 2</h2>
    <p>Recorre del 1 hasta el 200 con un while, seleccionando los multiplos de 7 que no sean multiplos de 3. Muestra cada seleccionado en un li dentro de una lista ordenada. Cuando hayas acabado de mostrar todo, fuera de la lista. enseña la cantidad de numeros que hay, su suman y su media</p>
    <ul>
        <?php 
        $num = 1;
        $cont = 0;
        $suma = 0;
        
        while ($num < 200){
            if(($num % 7 == 0) && ($num % 3 != 0)) {
              ?>
              <li>Numero: <?php echo $num;?></li>
              <?php
              $cont++;
            }
            $num++;
        ?>
        <?php 
            
        }
        $suma = $suma + $num;  
        $media = $suma / $cont;

        echo "<br>Hay un total de (contador): $cont<br>";
        echo "La suma de todos los numeros es (suma): $suma<br>";
        echo "La media es (media): $media<br>";
        ?>
    </ul>
</body>
</html>