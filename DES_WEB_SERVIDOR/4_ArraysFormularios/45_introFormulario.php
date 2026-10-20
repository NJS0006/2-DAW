<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro Formularios</title>
</head>
<body>
    <h3>Cómo Funciona una petición</h3>
    <p>
        Cada vez que el navegador pide esta página, PHP se ejecuta desde 0 y rellena unos arrays especiales. Llamados: "Los arrays super-globales": $_GET, $_POST, $_REQUEST, $_SERVER. 
        Todos estos arrays son arrays completamente normales que funcionan exactamente igual que cualquier otro array que nosotros creemos.</p>
        <?php
            echo '$_GET';
            echo "<pre>"; print_r($_GET); echo "</pre>";
echo "<br><hr><br>";
            echo '$_POST';
            echo "<pre>"; print_r($_POST); echo "</pre>";
echo "<br><hr><br>";
            echo '$_REQUEST';
            echo "<pre>"; print_r($_REQUEST); echo "</pre>";
echo "<br><hr><br>";
            echo '$_SERVER';
            echo "<pre>"; print_r($_SERVER); echo "</pre>";
            
echo "<br><hr><br>";

            //Claves de $_SERVER
            $claves = [
                "REQUEST_METHOD" => "Metodo de la peticion que se a enviado",
                "REQUEST_URI" => "La ruta y los parametros que se han pedido",
                "QUERY_STRING" => "Parametros de la URL",
                "SCRIPT_NAME" => "Archivos PHP que se ejecutan",
                "HTTP_REFERER" => "Página desde la que vienes",
                "HTTP_USER_AGENT" => "Navegador y sistema operativo desde el qe se trabaja",
                "REMOTE_ADDR" => "IP del cliente",
                "SERVER_NAME" => "Nombre del servidor",
                "SERVER_PORT" => "Puerto del servidor"
            ];
        ?>
        
        <h3>Claves de $_SERVER</h3>
        <table border="">
            <tr>
                <th>Clave de $_SERVER</th>
                <th>Que es</th>
                <th>valor</th>
            </tr>
            <?php
                foreach($claves as $clave => $descripcion){
                ?>
                <tr>
                    <td><?= $clave ?></td>
                    <td><?= $descripcion ?></td>
                    <td><?= $_SERVER[$clave] ?? "(no existe)" ?></td>
                </tr>
                <?php
                }
                ?>
        </table>

<br><hr>

        <h3>Formulario</h3>
        <form action="" method="get">
            <label> Cometario: <input type="text" name="comentario"></label>
            <input type="submit" value="Enviar" name="hePulsadoEsteBoton">
        </form>
<br><br>
        <?php
            //Controlar si la variable existe [decir por que es importante]
            if(isset($_GET["comentario"])){ //Esta condicion me controla si para la calve "comentario" hoy valor asignado
                $recogida = $_GET["comentario"];
                echo "<h4>$recogida</h4>";
            }
            else{
                echo "Manda algo cabron";
            }
        ?>
<br>
<br><hr><br>

        <!-- Ejercicio simple -->
        <h3>Ejercicio Simple</h3>
        <form action="" method="post">
            <label> Nombre: <input type="text" name="nombre"></label>
            <br><br>
            <label> Edad: <input type="number" name="edad"></label>
            <br><br>
            <input type="submit" value="Enviar" name="hePulsadoEsteBoton">
        </form>
<br><br>
        <?php
            //Controlar si hay algo en las claves "nombre" y "edad"
            if(isset($_POST["nombre"]) && isset($_POST["edad"])){
                $guardadoNombre = $_POST["nombre"];
                $guardadoEdad = $_POST["edad"];
                echo "Me llamo $guardadoNombre y tengo $guardadoEdad años";
            }
            else{
                echo "Como voy a mandar un formulario sin datos gilipollas?";
            }
            

            if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Tendra SOLO o GET o POST
            //Me meto en el if SOLO SI ME HA LLEGADO los datos de un formulario que usa el motodo POST
                if(isset($_POST["nombre"]) && isset($_POST["edad"])){
                    $guardadoNombre = $_POST["nombre"];
                    $guardadoEdad = $_POST["edad"];
<<<<<<< HEAD
                    // echo "Me llamo $guardadoNombre y tengo $guardadoEdad años";
                }
                // else{
                //     echo "Como voy a mandar un formulario sin datos gilipollas?";
                // }
            }
        ?>
<br>
<br><hr><br>
=======
                    echo "Me llamo $guardadoNombre y tengo $guardadoEdad años";
                }
                else{
                    echo "Como voy a mandar un formulario sin datos gilipollas?";
                }
            }
        ?>
<br>
<br><hr>
>>>>>>> 52069a2510a4735a561403c8d827cf2336e58e25

        <!-- HACER UN CONTADOR -->
        <p>La pagina no recuerda nada de la ejecucion anterior iclusive los datos que se pasaron. Vamos a ver una forma en la que podemos "recordar" un dato usando "input hidden"</p>
        <?php
            //Inicializar el contador
            $contador = 0;
            //Comprobar si existe
<<<<<<< HEAD
            if(isset($_POST["contador"])){
                $contador = $_POST["contador"];
            }

            if(isset($_POST["accion"])){
=======
            if(assert($_POST["contador"])){
                $contador = $_POST["contador"];
            }

            if(assert($_POST["accion"])){
>>>>>>> 52069a2510a4735a561403c8d827cf2336e58e25
                if($_POST["accion"] == "SUMAR") $contador++;
                else $contador--;
            }
        ?>
        <form action="" method="post">
            <!--  -->
            <input type="hidden" name="contador" value="<?= $contador ?>">
            <p>C0NTADOR: <?= $contador ?></p>
            <input type="submit" name="accion" value="RESTAR">
            <input type="submit" name="accion" value="SUMAR">
<<<<<<< HEAD

            
=======
>>>>>>> 52069a2510a4735a561403c8d827cf2336e58e25
        </form>
</body>
</html>