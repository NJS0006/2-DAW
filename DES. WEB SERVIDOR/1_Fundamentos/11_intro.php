<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adios</h1>
    <!-- Esta es la parte estática de mi web -->
    <p>Esto es una intro de PHP</p>
    <p>Este texto es HTML puro, no tiene ni JS ni PHP...</p>
    <p>
    <?php
    $salto = "<br>";
    echo "hola!";
    ?>
    </p>

    <?php
    echo "<p>Adios</p>";

    //Poner la fecha
    echo date("d/m/Y H:i:s");

    //br
    echo "<br>";
    echo "<br>";

    //Hacer variables ($ + nombre_variable)
    $lenguaje = "PHP";
    $ciclo = "DAW";

    echo "El lenguaje de backend que aprenderemos este año será ".$lenguaje.$salto;
    echo "El lenguaje de backend que aprenderemos este año será $lenguaje.$salto";

    // $1var = 1; LOS NOMBRES DE LAS VARIBALES NO PUEDEN EMPEZAR POR NUMEROS
    $_1var = 1; //EMPEZAR CON BARRA BAJA
    ?>
</body>
</html>