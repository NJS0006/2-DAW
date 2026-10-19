<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sub-Arpartado 1</h2>
    <p>
        Dado los datos que aparecen en la pizzarra, crear un array bidimensional indexado con los datos de todos los viajes que tiene mi empresa de autobuses. Añadir dos viajes mas en el que el primer viaje tenga como destino "Torremolinos" y el segundo vaiaje tenga como origen "Málaga"
    </p>


    <h2>Sub-Apartado 2</h2>
    <p>
        Manteniendo el orden original de mi array, enseña en el navegado gracias a la funcion print_r el array ordenado por duracion de mas largo a mas corto
    </p>


    <h2>Sub-Apartado 3</h2>
    <p>Gracias a una funcion llamada "tabla()". Crea una tabla con la siguiente escructura</p>
    <table>
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Duración</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <p>
    Si el precio del viaje es <=0, se mostrara "viaje no dsponible". <br> 
    Si el precio es >= 1 y < 10 se coloreara la fila entera de color azul <br>
    Si el precio esta en >=10 y < 15 se coloreara verde <br>
    Si el precio es >= 15, la fila de morado
    </p>


    <h2>Sub-Apartado 4</h2>
    <p>
        Modifica la funcion tabla para que sea capaz de recibir dos parametros. Uno que indique la columna en formato ntero y otro que indique el tipo de ordenacion.  EJ: tabla(0, SORT_DESC); La funcion ahora debera mostrar la tabla pero con los datos del array ordenados segun la columna y el tipo de ordenacion
    </p>


    <h2>Sub-Apartado 5</h2>
    <p>
        Modifica la tabla de la funcion para que contenga UNA COLUMNA MAS, llamada "tipo". Que dependiendo de la duracion de cada viaje, contendrá una cadena u otra.
    </p>
    <ul>
        <li>Duracion <= 30 --- Corta distancia</li>
        <li>Duración > 30 && <= 120 --- Media distacia</li>
        <li>Duración > 120 --- Larga distancia</li>
    </ul>
<br>
<hr>
<br>

    <?php
        //Apartado 1. Creacion del array
        $EmpresaBuses = [
            // Ambos viajes añadidos
            ["Fuengirola", "Torremolinos", 30, 4],
            ["Málaga", "Algeciras", 100, 15],
            // ------------------------ //
            ["Málaga", "Ronda", 100, 15],
            ["Churriana", "Málaga", 20, 3],
            ["Málaga", "Granada", 90, 12],
            ["Torremolinos", "Málaga", 30, 3.5],
        ];
    ?>
    
    <?php
        //Apartado 2. Sacar por pantalla ordenador (array_colum)
        echo "Apartado 2";
        $tiempo = array_column($EmpresaBuses, 2);
        array_multisort($tiempo, SORT_DESC, $EmpresaBuses);
        echo "<pre>"; print_r($EmpresaBuses); echo "</pre>";
    ?>

    <?php
        //Apartado 3. la lista
        echo "Apartado 3";
        function tabla(){
            global $EmpresaBuses;
        }
    ?>

    <table style = border: 1px;>
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Duración</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($EmpresaBuses as $tiempo => $duracion){
                    //color filas
                    $colorFondo = "";

                    if($duracion <= 0){
                        echo "Viaje no disponible";
                    }
                    else if (($duracion >= 1)&&($duracion < 10)){
                        $colorFondo = "blue";
                    }
                    else if (($duracion >= 10)&&($duracion < 15)){
                        $colorFondo = "green";
                    }
                    else if(($duracion >= 15)){
                        $colorFondo = "purple";
                    }
                }
            ?>

        </tbody>
    </table>
</body>
</html>