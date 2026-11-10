<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERICCIO 5 | FORMULARIOS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>EJERCICIO 5</h1>
    <h3>Genera un array de números aleatorios y filtra según un criterio específico</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej5">

        <label> Cantidad de numeros a generar: <input type="text" name="cantidadNum"></label>
        <label> Valor mínimo: <input type="text" name="valorMin"></label>
        <label> Valor máximo: <input type="text" name="valorMax"></label>
        <label> Filtro: </label>
        <select name="filtros">
            <option value="" selected disabled hidden>Seleciona una opcion</option>
            <option value="numPares">Numeros Pares</option>
            <option value="numImpares">Numeros Impares</option>
            <option value="mayoCinc">Mayores de 50</option>
            <option value="menCinc">Menores de 50</option>
            <option value="numPrim">Numeros primos</option>
            <option value="numPerf" disabled>Numeros perfectos</option>
        </select>
        <input type="submit" value="HACER CALCULOS">
    </form>
    
    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej5"){

                // CAPTURAMOS LAS VARIABLES
                $cantNum = $_POST["cantidadNum"];
                $valorMin = $_POST["valorMin"];
                $valorMax = $_POST["valorMax"];
                $filtros = $_POST["filtros"];
                
                // CREACION DEL ARRAY
                $arrayAleatorio = [];
                for ($i=1; $i <= $cantNum; $i++) { 
                    $arrayAleatorio[$i] = random_int($valorMin, $valorMax);
                }
                
                echo mostrarArray($arrayAleatorio);

                // ARRAY DE GUARDADO
                $variableNum = [];

                switch ($filtros){
                    case "numPares":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] % 2 == 0){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "numImpares":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] % 2 != 0){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "mayoCinc":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] >= 50){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "menCinc":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] <= 50){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "numPrim":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if(($arrayAleatorio[$i] % 2) && ($arrayAleatorio[$i] % 2)){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;
                }
            }
        }
    ?>
</body>
</html>