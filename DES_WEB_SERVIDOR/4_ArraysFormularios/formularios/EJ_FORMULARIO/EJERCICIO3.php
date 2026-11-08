<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERICCIO 3 | FORMULARIO</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>Introduce las notas de varios estudiantes y obtén estadísticas completas</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej3">
        
        <label> Notas alumnos: <input type="text" name="notas"></label>
<br><br>
        <input type="submit" value="ENVIAR NOTAS">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej3"){
                // CAPTURAMOS LA CADENA
                $notas = $_POST["notas"];
                
                // LO EXPLOTAMOS
                $arrayNotas = explode(",", $notas);

                // VARIABLES DE GUIA DE NOTAS
                $sobresalientes = 0;
                $aprobados = 0;
                $suspensos = 0;
                
                // BUCLE PARA SABER LA GUA DE NOTAS
                for ($i = 0; $i < count($arrayNotas); $i++) { 
                    if ($arrayNotas[$i] < 5){
                        $suspensos++;
                    }
                    elseif (($arrayNotas[$i] >= 5) && ($arrayNotas[$i] <= 7)) {
                        $aprobados++;
                    }
                    elseif ($arrayNotas[$i] > 7) {
                        $sobresalientes++;
                    }
                }

                echo ("<br> Las notas son:");
                echo mostrarArray($arrayNotas);
                echo ("Hay un total de: <br>
                Sobresalientes: $sobresalientes <br>
                Aprobados: $aprobados <br>
                Suspensos: $suspensos");
            }
        }
    ?>
</body>
</html>