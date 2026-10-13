<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Un array bidimensional tiene como caracteristica que cada elemento del array principal contiene otro array
        $jueguitos = [
            ["Silksong", "Metroidvania", 20],
            ["Elden Ring", "Souls", 60],
            ["Lego Batman", "Lego", 80],
            ["Spider-Man", "RPG", 80]
        ];

        //Acceder
        //PLANTILLA: echo $nombre_array[fila][columna]
        //echo $jueguitos[2][2];

        //Meter
        //plantilla: nombre_array[] = ["categoria1", "categoria2", "categoria3]
        $jueguitos = ["DSIII", "Souls", 40];


        //Recorrer
        foreach ($jueguitos as $juegos){
            foreach ($juegos as $caracteristicas){
                echo $caracteristicas;
            }
        }


        for ($i = 0; $i < count($jueguitos); $i++){
            for($j = 0; $j < count($jueguitos[i]); $j++){
                echo $jueguitos[i][j]." ";
            }
            echo "<br>";
        }

        
        //PLANTILLA: list(nombre_categoria1, nombre_categoria2, nombre_categoria3, (etc)) = variable 
        foreach($jueguitos as $juegazos){
            list($titulo, $categoria, $precio) = $juegazo;
        }
    ?>
</body>
</html>