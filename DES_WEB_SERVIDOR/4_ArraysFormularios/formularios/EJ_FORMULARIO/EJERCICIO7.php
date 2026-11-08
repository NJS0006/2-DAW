<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 7 | FORMULARIOS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>EJERCICIO 7</h1>
    <h3>Crea un formulario que reciba 5 notas de exámenes (separadas) (valores entre 0 y 10)</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej7">

        <h4>Dame 5 notas de los ultimoms 5 examenes hechos</h4>
        <label>Nota 1: <input type="text" name="nota1"></label>
        <label>Nota 2: <input type="text" name="nota2"></label>
        <label>Nota 3: <input type="text" name="nota3"></label>
        <label>Nota 4: <input type="text" name="nota4"></label>
        <label>Nota 5: <input type="text" name="nota5"></label>
        <input type="submit" value="EVIAR LAS NOTAS">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej7"){
                
                // CAPTURAMOS LAS VARIBALES DEL FORMULARIO
                $nota1 = $_POST["nota1"];
                $nota2 = $_POST["nota2"];
                $nota3 = $_POST["nota3"];
                $nota4 = $_POST["nota4"];
                $nota5 = $_POST["nota5"];
                
                // NOTA MEDIA
                $notaMedia = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

                // NOTA MAS ALTA
                $notaMasAlta = 0;
                if (($nota1 > $nota2) && ($nota1 > $nota3) && ($nota1 > $nota4) && ($nota1 > $nota5)){
                    $notaMasAlta = $nota1;
                }
                elseif (($nota2 > $nota1) && ($nota2 > $nota3) && ($nota2 > $nota4) && ($nota2 > $nota5)){
                    $notaMasAlta = $nota2;
                }
                elseif (($nota3 > $nota1) && ($nota3 > $nota2) && ($nota3 > $nota4) && ($nota3 > $nota5)){
                    $notaMasAlta = $nota3;
                }
                elseif (($nota4 > $nota1) && ($nota4 > $nota2) && ($nota4 > $nota3) && ($nota4 > $nota5)){
                    $notaMasAlta = $nota4;
                }
                else{
                    $notaMasAlta = $nota5;
                }

                // NOTA MAS BAJA
                $notaMasBaja = 0;
                if (($nota1 < $nota2) && ($nota1 < $nota3) && ($nota1 < $nota4) && ($nota1 < $nota5)){
                    $notaMasBaja = $nota1;
                }
                elseif (($nota2 < $nota1) && ($nota2 < $nota3) && ($nota2 < $nota4) && ($nota2 < $nota5)){
                    $notaMasBaja = $nota2;
                }
                elseif (($nota3 < $nota1) && ($nota3 < $nota2) && ($nota3 < $nota4) && ($nota3 < $nota5)){
                    $notaMasBaja = $nota3;
                }
                elseif (($nota4 < $nota1) && ($nota4 < $nota2) && ($nota4 < $nota3) && ($nota4 < $nota5)){
                    $notaMasBaja = $nota4;
                }
                else{
                    $notaMasBaja = $nota5;
                }

                // APROBADO | SUSPENDIDO
                if ($notaMedia >= 5){
                    echo "El alumno está aprobado <br>";
                }
                else{
                    echo "El alumno esta suspenso (vaya tonto) <br>";
                }
                
                // NUMERO ASIGNATURAS APROBADAS
                $numAsignaturasAprobadas = 0;
                if ($nota1 >= 5){
                    $numAsignaturasAprobadas++;
                }
                
                // SACADA POR PANTALLA
                echo ("Las notas introducidas son: <br>
                Nota 1: $nota1 <br>
                Nota 2: $nota2 <br>
                Nota 3: $nota3 <br>
                Nota 4: $nota4 <br>
                Nota 5: $nota5 <br>");
                
                echo ("La nota media es: $notaMedia <br>");
                
                echo ("La nota mas alta es: $notaMasAlta <br>");
                
                echo ("La nota mas baja es: $notaMasBaja <br>");
                
                echo ("El numero de aprobados es: $numAsignaturasAprobadas <br>");
            }
        }
    ?>
</body>
</html>