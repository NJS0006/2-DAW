<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA VALIDACION</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_error", 1);
        // require "archivo php";
    ?>
    <style>
        .bien{
            color: green;
        }
        .mal{
            color: red;
        }
    </style>
</head>
<body>
    <!-- CREAR UNA LISTA DEBAJO DE UN SIGN-UP DE LO QUE TE FALTA Y/O UN MENSAJE DE VALIDACION -->
    <?php
        // DECLARAMOS LAS VARIBALES EN EL PHP
        $nombre = "";
        $email = "";
        $edadTexto = "";
        $errores = [];

        // TODO ESTO ES SOLO PARA LOS ERRORES
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // 1. RECOGER Y QUITAR ESPACIOS DE LOS EXTREMOS 
            $nombre = trim($_POST["nombre"] ?? "");
            $email = trim($_POST["correo"] ?? "");
            $edadTexto = trim($_POST["edad"] ?? "");

            // 2. VALIDAR: CADA ERROR SE AÑADE AL ARRAY, NO SE PARA EN EL PRIMER ERROR QUE ENCUENTRE
            if($nombre == ""){
                $errores[] = "El nombre es obligatorio";
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $errores[] = "El correo no es valido";
            }
            $edad = filter_var($edadTexto, FILTER_VALIDATE_INT);
            if($edad === false || $edad < 0 || $edad > 100){
                $errores[] = "La edad tiene que ser un numero entero entre 0 y 100";
            }

            // 3. MOSTRAR EL RESULTADO O LA LISTA DE ERRORES
            if (count($errores) == 0){
                // SIEMPRE QUE QUIERA MOSTRAR COSAS QUE HA PASADO EL CLIENTE POR PANTALLA "htmlspecialchars($)"
                echo "<p class='bien'> Datos introducidos: <br>
                Nombre: ".htmlspecialchars($nombre). "<br> 
                Email: ".htmlspecialchars($email). "<br> 
                Edad:".htmlspecialchars($edad). "</p>";
            }else{
                ?>
                <ul class="mal">
                    <?php
                        foreach ($errores as $error) {
                            echo "$error". "<br>";
                        }
                    ?>
                </ul>
            <?php
            }
        }
    ?>
    
    <!-- PRIMERO EL FORMULARIO (SIEMPRE) -->
    <h2>Lista de errores y conservacion de valores</h2>
    <ul>
        <li>Los errores se guardan en un array y se muestran todos juntos, en lugar de parar en el primero</li>
        <li>Si hay errores en el formulario, se conserva lo que se escribió anteriormente gracias al atributo value para que el cliente no enga que volver a escribir todo</li>
    </ul>
    <form action="" method="post">
        <label for="nombre">Nombre: </label> <input type="text" name="nombre" value=""<?= htmlspecialchars($nombre) ?>><br><br>
        <label for="correo">Email: </label> <input type="text" name="correo" value=""<?= htmlspecialchars($email) ?>><br><br>
        <label for="edad">Edad: </label> <input type="text" name="edad" value=""<?= htmlspecialchars($edad ?? "") ?>><br><br>
        <input type="submit" value="ENVIAR">
    </form>

</body>
</html>