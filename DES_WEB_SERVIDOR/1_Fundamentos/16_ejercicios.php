<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <li>Crea una funcion que muestre "Hola {tu nombre}" usando una varibale defenida desde fuera de la función recogiendo dicha funcion a través de un parámetro. En caso de llamar a la función sin parametro, el valor por defecto será "Paquito"</li>
        <li>Cra una función llamada operaciones que, dada dos variables, sacar por pantalla la suma, resta, division, modulo y multiplicacion de las dos varibales. (NO hace falta tener en cuenta la division por 0)</li>
        <li>Haz uso de los operandos "^" y "**" para dos variables numericas (2 y 10 por ejemplo). Dada la solucion, deduce (sin chatgpt) que hace cada operando</li>
    </ol>

      
    <h3>EJERCICIO 1</h3>
    <?php
    function mostarNombre($nombre = "Paquito"){
        echo "Hola $nombre <br>";
    }
    
    ?>
</body>
</html>