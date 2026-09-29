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
        $numTotal = 0;
        do{
            $numAleatorio = random_int(1, 20);
            $numTotal = $numTotal + $numAleatorio;
        }while($numTotal > 100);

        echo $numTotal;
    ?>
</body>
</html>