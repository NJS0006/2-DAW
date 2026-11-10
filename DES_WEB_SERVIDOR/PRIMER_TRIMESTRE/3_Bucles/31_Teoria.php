<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bucles</h1>
    <p>Un bucle repite un bloque de codigo tantas veces como nosotros queramos, el numero de iteraciones dependera de la condicion que definamos y como interactua dicha condicion con la variable booleana o iterativa</p>

    <?php

    //1. WHILE
    $numero = 5;
    
    while ($numero <= 12){
        echo "El valor del numero es: $numero<br>";
        $numero+=2;
    }
    echo $numero;

    //2. DO WHILE
    //Partiendo del numero 9 hacia abajo (hasta llegar al cero sin incluir), mostrar por navegador en una linea para cada uno todos los numeros pares
    $numero2 = 9;
    do{
        if($numero2 % 2 == 0){
            echo "El siguiente numero es: $numero2.<br>";
        }
        $numero2--;
    }while($numero2>0);

    //3. FOR
    for ($i = 0; $i<= 10; $i++){
        echo "<p id='parrafo$i'> Estamos en el parrafo numero $i </p>";
    }

    //4. BUCLES ANIDADOS
    for ($i = 0; $i < 4; $i++) { 
        for ($j = 0; $j < 4; $j++) { 
            echo "[$i. $j]";
        }
        echo "<br>";
    }

    //5. FOR EACH
    //Sirve para iterar los elementos de un array tanto asocioativo como indexado
    $nombre = ["123456789A" => "Ana", "123456789B" => "Luis", "123456789C" => "Marta", "123456789D" => "Paquito", "123456789E" => "Paquito", "123456789F" => "Emilio"];
    foreach ($nombre as $nombre){
        echo $nombre. "<br>";
    }

    $deportes = ["F1" => "El Nano", "MotoGP" => "Rafa Nadal (22 Grand Slams//14 Roland Garros)", "baloncesto" => "Lebrooooon Jameeees"];
    foreach($deportes as $clave => $valor){
        if ($clave != "F1")
            echo "<p>En el $clave el rey es $valor</p>";
        else
            echo "<p>En la $clave el rey es $valor</p>";
    }
    
    //6. GENERAR HTML CON UN BUCLE
    echo "<h2>Generar una lista HTML con un bucle</h2>";
    ?>
    <ul>
        <?php
            while ($numero%7 !=0 && $numero%3 != 0){
        ?>
        <li>Mi numero es el <?php echo $numero ?></li>
        <?php
            $numero ++;
            }
        ?>
    </ul>
</body>
</html>