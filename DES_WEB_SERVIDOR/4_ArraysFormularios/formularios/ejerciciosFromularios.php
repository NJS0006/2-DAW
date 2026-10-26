<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>EJERCICIO1</h3>
    <p>Crea un formulario que contenga dos campos de texto; el primero recogerá una serie de números separados por comas y el segundo recogerá el orden en el que se mostrará dicha cadena. Usar el método post en el formulario. Usar explode e implode para este ejercicio. NO USAR ARRAY_MULTISORT()</p>
    <!-- <form action="" method="post">
        <input type="hidden" name="formularios" value="ej1">
        
        <label>Numeros: <input type="text" name="numeros" id=""></label>
<br><br>
        <label>Orden: <input type="text" name="orden" id=""></label>
    <br><br>
        <input type="submit" value="Enviar">
    </form> -->

    <?php
        // ($_SERVER["REQUEST_METHOD"] == "POST");
        
        // if (isset($_POST["formularios"]) && $_POST["formularios"] == "ej1"){
        //     $numeros = $_POST["numeros"];
        //     $orden = $_POST["orden"];
        //     $numeros = explode(",", $numeros);
        //     switch ($orden) {
        //         case ('asc'):
        //             sort($numeros);
        //         break;
                
        //         case ('desc'):
        //             rsort($numeros);
        //         break;

        //         default:
        //         echo "Eres gilipollas";
        //     }
        //     echo "<pre>"; print_r($numeros); echo "</pre>";
        // }
    ?>

    <h3>EJERCICIO2</h3>
    <p>Crear un formulario POST con un campo que recoja el nombre de una fruta. Internamente crear un array de frutas. El objeto de este formulario es ver si la fruta introducida en el formulario está en nuestro array creado anteriormente</p>
    <form action="" method="post">
        <input type="hidden" name="formularios" value="ej2">
        <input type="text" name="fruta" id="">
        <input type="submit" value="Enviar">
    </form>


    <h3>EJERCICIO CONJUNTOS</h3>
    <p>Crea un formulario con dos campos de texto en el que introducirás los elementos de dos conjuntos separados por una coma. Hacer la operación de unión, interseccion y las dos diferencias y mostrar cada resultado en formato cadena</p>
    <p>EJ: 
    C1: 1, 2, 3, 7 || C2: 4, 9, 5, 1
    Unión = 1, 2, 3, 4, 7, 9, 5, 1
    Intersección: C1 - C2 = 2, 3, 7 || C2 - C1 = 4, 9, 5 
    </p>

    <form action="" method="post">
        <input type="hidden" name="formularios" value="ejConj">
        
        <label>Numeros: <input type="text" name="numeros" id=""></label>
<br><br>
        <label>Orden: <input type="text" name="orden" id=""></label>
    <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        ($_SERVER["REQUEST_METHOD"] == "POST");
        
        if (isset($_POST["formularios"]) && $_POST["formularios"] == "ejConj"){
            $numeros = $_POST["numeros"];
            $orden = $_POST["orden"];
            $numeros = explode(",", $numeros);
            switch ($orden) {
                case ('asc'):
                    sort($numeros);
                break;
                
                case ('desc'):
                    rsort($numeros);
                break;

                default:
                echo "Eres gilipollas";
            }
            echo "<pre>"; print_r($numeros); echo "</pre>";
        }
    ?>

</body>
</html>