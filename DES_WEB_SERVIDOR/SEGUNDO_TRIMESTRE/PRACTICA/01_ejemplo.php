<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJEMPLO PRECIO VALIDADO</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require "calculos.php"; // [NUEVO CONCEPTO]
    // "REQUIRE" ES UNA INSTRUCCION DEL LENGUAJE QUE SIRVE PARA INSERTAR Y EJECUTAR EL CONTENIDO DE OTRO ARCHIVO PHP DENTRO DEL ARCHIVO ACTUAL
    ?>
    <style>
        .error{
            color: red;
        }
        .bien{
            color: green;
        }
    </style>
</head>
<body>
    <!-- CALCULAR EL PRECIO DE UN PRODUCTO SEGUN EL IVA -->
    
    <!-- PARA LA PARTE DE LA VALIDACION Y SOLO PARA LA PARTE DE LA VALIDACION PRIMERO SE PONE EL PHP -->

    <h2>Calculadora con IVA</h2>
    <!-- PHP -->
    <?php
        $tmp_precio = "";
        $tmp_iva = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            // 1. RECOGIDA DE DATOS EN VARIABLES TEMPORALES
            $tmp_precio = trim($_POST["precio"] ?? "");

            // OPCION 1
            // if(isset($_POST["iva"])) $tmp_iva = $_POST["iva"];
            // else $tmp_iva = "";

            // OPCION 2
            $tmp_iva = $_POST["iva"] ?? "";


            // 2. VALIDACIÓN DE DATOS
            // PRECIO
            if($tmp_precio == ""){
                // NIVEL 1: COMPROBAR QUE NO ESTÉ VACIO
                $err_precio = "El precio es obligatorio";
                echo ("$err_precio<br>");
            }else{
                // NIVEL 2: VALIDAR QUE SEA UN NUMERO (int // float)
                $tmp_precio_filtrado = filter_var($tmp_precio, FILTER_VALIDATE_FLOAT);
                if($tmp_precio_filtrado === false){
                    $err_precio = "El precio debe de ser un numero (entero o decimal)";
                } else{
                    // NIVEL 3: VALIDAR QUE SEA POSITIVO
                    if($tmp_precio_filtrado <= 0){
                        $err_precio = "El precio debe ser mayor a 0 (gilipollas)";
                    }else{
                        // NIVEL 4: VALIDAR LIMITE MAXIMO DE UN PRECIO (OPCIOAL PERO RECOMENDABLE)
                        if($tmp_precio_filtrado > 9999999.99){
                            $err_precio = "Te estas pasando maquina";
                        } else{
                            // SI LLEGO AQUI TODO ES CORRECTO, POR TANTO CREO Y ASIGNO A MI VARIBALE DEFINITIVA
                            $precio = $tmp_precio_filtrado;
                        }
                    }
                }
            }

            // 3. VALIDACION DEL IVA con whitelist (lista blanca)
            $whitelist = ["general", "reducido", "super-reducido"]; // [NUEVO CONCEPTO]

            if($tmp_iva == ""){
                // NIVEL 1: COMPROBAR QUE NO ESTÉ VACIO
                $err_iva = "EL tipo de iva es obligatorio";
            } else{
                // NIVEL 2: VALIDAR CONTRA LA whilelist (PROTECCION CONTRA MANIPULACION DEL FORMULARIO)
                // COGER EL ELEMENTO QUE HAY Y COMPROBAR QUE ESTÁ EN EL ARRAY
                if(!in_array($tmp_iva, $whitelist)){
                    $err_iva = "El tipo de IVA no es valido (quien coño te crees cambiando las cosas con el F12)";
                }
                else{
                    // TODO CORRECTO
                    $iva = $tmp_iva;
                }
            }
        }
    ?>

    <form action="" method="post">
        <label for="precio">Precio</label>
        <!-- NO IMPORTA SI LO PONEMOS DE TIPO TEXTO/NUMBER YA QUE EL USUARIO LO PUEDE CAMBIAR DESDE EL F12 DE LA PAGINA -->
        <input type="text" name="precio" id="precio" value="<?= htmlspecialchars($tmp_precio)?>"> <!-- TENGO QUE VOLVER MAS ADELANTE -->
        <?php 
            if(isset($err_precio)) echo "<span class = 'error'> $err_precio </span>";
        ?>
        <br><br>
        <label for="iva">TIPO DE IVA</label>
        <select name="iva" id="iva">
            <option disable salected>--ELIGE TIPO DE IVA--</option>
            <option value="general">GENERAL</option>
            <option value="reducido">REDUCIDO</option>
            <option value="super-reducido">SUPER REDUCIDO</option>
        </select>
        <?php 
            if(isset($err_iva)) echo "<span class = 'error'> $err_iva </span>";
        ?>
        <br><br>
        <input type="submit" value="CALCULAR PVP">
    </form>

    <?php
        if(isset($precio) && isset($iva)){
    ?>
        <h2 class= "bien">Has puesto: <?= $precio ?>€, y "<?= $iva ?>" de tipo de iva</h2>

        <h2 class= "bien"><?= $precio ?>€, y "<?= $iva ?>" de tipo de iva</h2>
    <?php
        }
    ?>


</body>
</html>