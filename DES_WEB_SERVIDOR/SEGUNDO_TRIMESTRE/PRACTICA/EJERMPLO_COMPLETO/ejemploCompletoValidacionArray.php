<?php
/**
 * Nombre: obligatorio, mas de 3 caracteres y menos de 40
 * Correo: obligatorio, formato correo
 * Edad: obligatorio, formato entero, mayor a 18, menor 80
 * 
 * Taller: lista desplegable creando una whitelist (extra: guardar la opcion la opcion anterior del cliente trabajando con el atributo selected) (PHP desde cero // JS para principiantes // GitHub desde el prinicpio)
 * Turno: Lo mismo que taller pero con radios (mañana/tarde)
 * 
 * Condiciones: Obligatorio que esté marcado y guardar el marcado en el caso que el cliente lo haya marcado anteriormente 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ejmComptValid.css">
    <?php
        // SALIDA DE ERRORES DE PHP
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <!-- PHP -->
    <?php
        $nombre_tmp = "";
        $email_tmp = "";
        $edadTexto = "";
        $taller_tmp = "";
        $errores = [];

        // HACEMOS LOS ERRORES
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // --------------------- //
            // NOMBRE | EMAIL | EDAD //
            // --------------------- //

            // RECOGER QUITAR LOS ESPACIOS DE LOS EXTREMOS 
            $nombre_tmp = trim($_POST["nombre"] ?? "");
            $email_tmp = trim($_POST["correo"] ?? "");
            $edadTexto = trim($_POST["edad"] ?? "");

            // VALIDAR CADA ERROR Y QUE SE AÑADA EN EL ARRAY
            if ($nombre_tmp == "" || strlen($nombre_tmp) < 3 || strlen($nombre_tmp) > 40){
                $errores[] = "El nombre no es valido, debe ser un nombre dentro los 3 y los 40 caracteres <br>";
            }
            if(filter_var($email_tmp, FILTER_VALIDATE_EMAIL) === false){
                $errores[] = "Correo no valido (gilipollas, ni eso sabes hacer bien) <br>";
            }

            // COMPROBACIONES EDAD
            if ($edadTexto == ""){
                $errores[] = "La edad tiene no puede estar vacia <br>";
            }
            else{
                $edadFiltrada = filter_var($edadTexto, FILTER_VALIDATE_INT);
                if($edadFiltrada === false){
                    $errores[] = "La edad debe de ser un numero <br>";
                }
                else{
                    if($edadFiltrada < 18 || $edadFiltrada > 80){
                        $errores[] = "la edad debe de ser un numero MAYOR de 18 y MENOR de 80 <br>";
                    }
                    else{
                        $edadTexto = $edadFiltrada;
                    }
                }
            }

            // -------- //
            // TALLERES //
            // -------- //

            $taller_tmp = trim($_POST["talleres"] ?? "");

            // VALIDACION DEL TALLER CON WHITELIST (LISTA BLANCA)
            $whitelistTalleres = ["phpDesdeCero", "JsPrincipiantes", "GitHubPrincipio"];

            if($taller_tmp == ""){
                $errores[] = "Tienes que seleccionar obligatoriamente un taller <br>";
            }
            else{
                // VALIDACION CON EL WHITELIST (PROTECCION CONTRA MANIPULACION DEL FORMULATIO (F12))
                if(!in_array($taller_tmp, $whitelistTalleres)){
                    $errores[] = "No intentes cambiarme la pagina payaso <br>";
                }
                else{
                    $taller = $taller_tmp;
                }
            }

            // ------ //
            // TURNOS //
            // ------ //

            $turnos_tmp = trim($_POST["turnos"] ?? "");

            // VALIDACION DEL TALLER CON WHITELIST (LISTA BLANCA)
            $whitelistTurnos = ["turnoMañana", "turnoTarde"];

            if($turnos_tmp == ""){
                $errores[] = "Tienes que seleccionar obligatoriamente un turno del dia <br>";
            }
            else{
                // VALIDACION CON EL WHITELIST (PROTECCION CONTRA MANIPULACION DEL FORMULATIO (F12))
                if(!in_array($turnos_tmp, $whitelistTurnos)){
                    $errores[] = "No intentes cambiarme la pagina payaso <br>";
                }
                else{
                    $turno = $turnos_tmp;
                }
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
                <ul>
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

    <!-- FORMULARIO HTML -->
    <h2>EJERCICIO COMPLETO VALIDACION</h2>
    <form action="" method="post">

        <!-- NOMBRE | EMAIL | EDAD -->
        <label for="nombre">Nombre: </label> <input type="text" name="nombre" value="<?= htmlspecialchars($nombre_tmp) ?>" require> 
<br>
        <label for="correo">Correo: </label> <input type="email" name="correo" value="<?= htmlspecialchars($email_tmp) ?>" require> 
<br>
        <label for="edad">Edad: </label> <input type="number" name="edad" value="<?= htmlspecialchars($edadFiltrada) ?>" require> 
<br>
        <!-- TALLERES -->
        <label for="talleres">Talleres a seleccionar:</label>
        <select name="talleres" id="">
            <option value="" disable selected>-- OPCIONES DE TALLERES --</option>
            <option value="phpDesdeCero">PHP DESDE 0</option>
            <option value="JsPrincipiantes">PHP PARA PRINCIPIANTES</option>
            <option value="GitHubPrincipio">GITHUB DESDE EL PRINCIPIO</option>
        </select>
<br>
        <!-- TURNOS -->
        <label for="">Turnos del dia a seleccionar: </label>
        <div class="radio-item">
            <input type="radio" name="turnos" id="turno_manana" value="turnoMañana">
            <label for="turno_manana">Turno de mañana</label>
        </div>
        
        <div class="radio-item">
            <input type="radio" name="turnos" id="turno_tarde" value="turnoTarde">
            <label for="turno_tarde">Turno de tarde</label>
        </div>
<br>
        <input type="submit" value="ENVIAR PRUEBA">
    </form>
</body>
</html>