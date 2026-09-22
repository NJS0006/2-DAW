<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FUNCIONES EN PHP</h1>
    <?php
    $salto = "<br>";
    $_2saltos = "<br><br>";

        //Una funcion es un bloque de codigo al que ponemos un nombre con el que hacer referencia mas adelante. Nos permite reutilizar codigo sin tener que reescribirlo. vamos a ver funciones con y sin parametros, y con y sin returns.  

        echo "//SIN PARAMETROS Y SIN RETURN//";
echo $salto;
        function saludar(){
            echo "Alooo<br>";
        }
        saludar();

echo $_2saltos;

        echo "//CON PARAMETROS Y SIN RETURN//";
echo $salto;
        function presentarse($nombre, $edad){
            echo "Hola, mi nombre es $nombre y tengo $edad años <br>";
        }
        presentarse("Nico", 20);

echo $_2saltos;

        echo "//SIN PARAMETROS Y CON RETURN//";
echo $salto;
        function saludar2(){
            return "Adios<br>";
        }
        echo saludar2();

echo $_2saltos;

        echo "//PARAMETROS CON UN VALOR POR DEFECTO//";
echo $salto;
        //Si no pasamos un argumento, se utiliza el valor que hemos indicado
        function darBienvenida($nombre = "NPC"){
            echo "Bienvenido/a, $nombre<br>";
        }

        darBienvenida("Nico");
        darBienvenida();

        //IMPORTANTE!!! Si combinamos parametros obligatorios y opcionales, colocamos primero los obligatorios y despues los opcionales

echo $_2saltos;

        echo "//CON PARAMETROS Y CON RETURN//";
echo $salto;
        function operar ($a, $b){
            return "la suma de $a y $b, es: ". $a+$b;
        }

        echo operar(20,40);

        
    ?> 
</body>
</html>