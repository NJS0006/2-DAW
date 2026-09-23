
<?php
//Si hay HTML en el archivo podemos abrir la etiqueta de php y no cerrarla
    $salto = "<br>";

    //Constantes (define + (nombre_constante, valor_constante))
    define("numPI", 3.1416);

    echo numPI.$salto;

    //TIPOS DE DATOS
    $var1 = 4; //numerico
    $var2 = 4.1; //double
    $var3 = "cuatro coma algo"; //string
    $var4 = true; //boolean
    $var5 = null; //null

    //Enseñar tipo de variable y valor de esa variable
    var_dump($var1);
    echo "<br>";
    var_dump($var3);

echo "<br>";

    //CONVERSION DE TIPO DE DATOS
    
echo "<br>";
    //De X a int
    $cadena = "alooooo";
    echo "Mostrar el numero en modo cadena: ";
    var_dump($cadena);
    $cadena = intval($cadena); // Reescribir mi variable cadena pasandola a tipo entero
echo "<br>";
    var_dump($cadena);

echo "<br>";
echo "<br>";

    //De X a String
    $numero = 21.1;
    echo "Mostrar el numero decimal: ";
    var_dump($numero);
    $numero = strval($numero);
    var_dump($numero);

echo "<br>";
echo "<br>";

    //De X a float
    $entetro = 13;
    echo "Mostrar el numero entero: ";
    var_dump($entetro);
    $entetro = floatval($entetro);
    var_dump($entetro);
