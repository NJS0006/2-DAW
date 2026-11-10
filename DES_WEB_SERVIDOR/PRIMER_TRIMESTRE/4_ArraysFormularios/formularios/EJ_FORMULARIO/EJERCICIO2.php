<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERICCIO 2 | FORMULARIO</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>Busca si una fruta existe en el siguiente array predefinido</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej2">

        <label>Que fruta quieres buscar? <input type="text" name="buscarFruta"></label>
<br><br>
        <input type="submit" value="BUSCAR FRUTA">
<br><br>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej2"){

                $arrayFrutas = ["Manzana", "Pera", "Plátano", "Naranja", "Fresa", "Uva", "Sandía", "Melón","Piña", "Kiwi"];

                $frutaBuscar = $_POST["buscarFruta"];

                if(in_array($frutaBuscar, $arrayFrutas)){
                    echo ("Tu fruta ($frutaBuscar) está en el array <br>");
                    echo ("En nustro array están las frutas: <br>");
                    
                    echo "<pre>";
                    print_r($arrayFrutas);
                    echo "</pre>";
                }
                else{
                    echo ("Tu fruta ($frutaBuscar) NO está en el array <br>");
                    echo ("En nustro array están las frutas: <br>");
                    
                    echo "<pre>";
                    print_r($arrayFrutas);
                    echo "</pre>";
                }

            }
        }
    ?>
</body>
</html>