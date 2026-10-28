<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h3>EJERCICIO1</h3>
    <p>Crea un formulario que contenga dos campos de texto; el primero recogerá una serie de números separados por comas y el segundo recogerá el orden en el que se mostrará dicha cadena. Usar el método post en el formulario. Usar explode e implode para este ejercicio. NO USAR ARRAY_MULTISORT()</p>

    
    <form action="" method="post">
        <input type="hidden" name="formularios" value="ej1">

        <label>Dame tu serie de numeros: <input type="text" name="numeros"></label>
    <br><br>
        <label>En que orden los quieres: <input type="text" name="orden"></label>
    <br><br>
        <input type="submit" value="Enviar">
    </form> -->

    <!-- PHP -->
    <?php
        /*
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            // Declaramos las variables
            $numeros = $_POST["numeros"]; // Hacemos que lo que entre por POST con el nombre de "numeros" se guarde en la variable "numeros"
            $orden = $_POST["orden"];

            // Creamos el array con explode (mirar definicion en los apuntes si necesario)
            $arrayNum = explode(",", $numeros);

            // Creamos la condicion de sacada (switch)
            switch($orden){
                // Ordenamos de mayor - menor [sort($array)]
                case 'asc':
                    sort($arrayNum);
                    echo "<pre>"; print_r($arrayNum); echo "</pre>";
                break;
                
                // Ordenamos de menor - mayor [rsort($array)]
                case 'desc':
                    rsort($arrayNum);
                    echo "<pre>"; print_r($arrayNum); echo "</pre>";
                break;

                // Que pasa si no se mete ni una ni otra
                default:
                echo "<br> Eres gilipollas <br>";
            }
        }
        */
    ?>    

    <h3>EJERCICIO2</h3>
    <p>Crear un formulario POST con un campo que recoja el nombre de una fruta. Internamente crear un array de frutas. El objeto de este formulario es ver si la fruta introducida en el formulario está en nuestro array creado anteriormente</p>

    <!-- HTML -->
    <form action="" method="post">
        <label>Que fruta quieres localizar? <input type="text" name="fruta"></label>
    <br><br>
        <input type="submit" value="Enviar">
    </form>

    <!-- PHP -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // Creamos nuestro array de frutas
        $frutas = ["Manzanas", "Peras", "Piña", "Fresas", "Cebollas"];

        // Pasamos nuestra variable de POST a utilizable
        $nombreFruta = $_POST["fruta"];

        if (in_array($nombreFruta, $frutas)){
            echo "<br> Tu fruta SI está en el array <br>";
            
            echo "<br> En el array están las frutas: <br>";
            echo "<pre>"; print_r($frutas); echo "</pre>";
        }
        else{
            echo "<br> Tu fruta NO está en el array <br>";
            
            echo "<br> En el array están las frutas: <br>";
            echo "<pre>"; print_r($frutas); echo "</pre>";
        }
    }
    ?>

<!--
    <h3>EJERCICIO CONJUNTOS (EJ3)</h3>
    <p>Crea un formulario con dos campos de texto en el que introducirás los elementos de dos conjuntos separados por una coma. Hacer la operación de unión, interseccion y las dos diferencias y mostrar cada resultado en formato cadena</p>
    <p>EJ: 
    C1: 1, 2, 3, 7 || C2: 4, 9, 5, 1
    Unión = 1, 2, 3, 4, 7, 9, 5, 1
    Intersección: C1 - C2 = 2, 3, 7 || C2 - C1 = 4, 9, 5 
    </p>

    
    <h3>EJERCICIO 4</h3>
    <p>
        Introduce las notas de varias asignauras de un solo estudiante, y obten las siguientes estadísticas: <br>
        Total notas // Nota maxima // Nota min // Media aritmetica // num aprobados // num suspensos
    </p>
    <p>
        En el formulario tendremos dos campos de texto: <br>
        1º: definiremos el nombre de las asignaturas, separadas por comas. <br> 
        2: Las notas de cada asignatura separadas por coma.
    </p>
    <p>
        Para rabajar este ejercicio, teneis que construir un array asociativo donde las claves son el nombre de cada asignatura y el valor es la nota de dicha asignatura, Después de mostrar todas las estadísticas, mostrar una tabla con tres columnas: Asignatura || Nota || Calificación. 
        Mostrar la fila en verde si está aprobado, y en rojo si está suspenso. <br><br>
    </p> -->
</body>
</html>