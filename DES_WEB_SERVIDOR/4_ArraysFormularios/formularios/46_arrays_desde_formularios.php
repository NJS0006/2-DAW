<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    ?>
</head>
<body>
    <form action=""  method="POST">
        
        <fieldset>
            <legend>Notitas</legend>
            <label for="">Nta 1:</label>
            <input type="number" name="nota[]" require>
            
            <label for="">Nta 2:</label>
            <input type="number" name="nota[]" require>

            <label for="">Nta 3:</label>
            <input type="number" name="nota[]" require>
        </fieldset>

        <fieldset>
            <legend>Interes para el proximo curso</legend>
            <label>PHP</label>
            <input type="checkbox" name="intereses[]" value="php">
        
            <label>JS</label>
            <input type="checkbox" name="intereses[]" value="js">
        </fieldset>
        <input type="submit" value="Enviar">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){ //Entro si y solo si se han enviado datos a traves de un formulario con el metodo POST
                if(isset($_POST["nota"])){ //Entro si y solo si se ha rellenado los datos del forulario de las notas
                    print_r($_POST["nota"]);
                }
            }
        ?>
    </form>
</body>
</html>