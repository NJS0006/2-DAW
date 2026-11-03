<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERICCIO 1 | FORMULARIO</title>
</head>
<body>
    <h3>EJERCICIO1</h3>
    <p>Crea un formulario que contenga dos campos de texto; el primero recogerá una serie de números separados por comas y el segundo recogerá el orden en el que se mostrará dicha cadena. Usar el método post en el formulario. Usar explode e implode para este ejercicio. NO USAR ARRAY_MULTISORT()</p>
    <form action="" method="post">
        <input type="hidden" name="formularios" value="ej1">
        
        <label>Numeros: <input type="text" name="numeros" id=""></label>
<br><br>
        <label>Orden: <input type="text" name="orden" id=""></label>
<br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        ($_SERVER["REQUEST_METHOD"] == "POST");
        
        if (isset($_POST["formularios"]) && $_POST["formularios"] == "ej1"){
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