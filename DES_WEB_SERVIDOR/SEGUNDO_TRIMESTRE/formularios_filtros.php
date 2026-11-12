<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        pre{
            backgournd-color: grey;
        }
        .error{
            color: red;
        }
        .acierto{
            color: green;
        }
    </style>
</head>
<body>
    <h3>VALIDACION CON filter_var()</h3>
    <?php 
    /**
     * filter_var(): Srive para comprobar si un valor tiene el formato esperado, si es asi, devolverlo convertido al tipo correcto
     * 
     * Es la herramienta pensada para los datos de un formulario, que siempre SIEMPRE llegan cadenas.
     * 
     * Si el valor es válido, devuleve el valor ya convertido ("25" pasa a sr int(25)) y si no es valido, devuleve false
     * 
     * intval() siempre devuelve un dato, aunque no sea correcto; filter_var() rechaza o que no es o no se puede convertir a entero (ESTO EN EL CASO DE QUE APLIQUEMOS EL FILTRO DE ENTEROS)
     * 
     * 
     * FILTER_VALIDATE_INT
     * FILTER_VALIDATE_FLOAT
     * FILTER_VALIDATE_EMAIL
     * FILTER_VALIDATE_URL
     * FILTER_VALIDATE_BOOLEAN
     * 
     */
    ?>
    <form action="" method="get">
        <input type="hidden" name="ejercicios_filtros">

        <input type="text" name="entero" id=""><br>
        <input type="text" name="decimal" id=""><br>
        <input type="text" name="correo" id=""><br>
        <input type="text" name="url" id=""><br>
        <input type="text" name="boolean" id=""><br>
<br><br>
        <input type="submit" value="ENVIAR">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET["ejercicios_filtros"])){
                $entero = $_GET["entero"];
                $entero = filter_var($entero, FLITER_VALIDATE_INT);
                if(!$entero){
                    echo "<p class = 'error'>El dato no es un entero : </p>";
                }
                else{
                    echo "<p class = 'acierto'>El dato SI es un entero : $entero </p>";
                    echo $entero;
                    echo $_GET["entero"];
                }
            }
        }
    ?>
</body>
</html>