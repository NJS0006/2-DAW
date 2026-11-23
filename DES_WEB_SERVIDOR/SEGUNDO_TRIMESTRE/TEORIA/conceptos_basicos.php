<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1. isset, empty, trim y htmlspecialchars</h1>
    <p>
        Antes de validar un formulario hay que tener claras 3 ideas: como saber si un dato exite o esta vacio, como limpiar los esacios de los extremos y como comtrar en la pagina texto que ha excritp el usuario sin que lo interprete HTML
    </p>
    <?php
        $valor = "0";

        var_dump(isset($valor)); // Esto se hace para saber si esta "seteada" la variable, en este caso devolveria true ya que la variable SI está seteada 
        var_dump(empty($valor)); // En este caso sacaria TRUE, por que empty() considera que, en este caso $>valor, al tener un valor 0 SI QUE ESTÁ VACIA. Un valor recogido dentro de la sista de "valores vacios"

        unset($valor); // Cargarse la variable

        var_dump(isset($valor)); // En este caso saldría false, ya que al borrar la variable (unset), la varibale ya no tendria un valor
        var_dump(empty($valor)); // En este caso seguiria saliendo true, ya que al borrar la variable (unset), si que esta vacia (por que no existe)
    ?>
    <table border = "1" >
        <tr>
            <th>Valor $x</th>
            <th>isset ($x)</th>
            <th>empty($x)</th>
        </tr>
        <?php
            $prueba = [
                ["null", null, false],
                ['"" (cadena vacia)', "", false],
                ['"0" (cadena con un cero)', "0", true],
                ["0", 0, true],
                ["false", false, false],
                ["[] (array vacio)", [], false],
                ['" " (un espacio vacio en blanco)', " ", true],
                ['"0.0"', '0.0', false],
                ['"hola"', "hola", false]
            ];
            foreach ($prueba as $pruebas) {
                $x = $pruebas[1];
                echo "<tr>";
                    echo "<td>" . $pruebas[0] . "</td>";
                    echo "<td>" . (isset($x) ? "true" : "false") . "</td>";
                    echo "<td>" . (empty($x) ? "true" : "false") . "</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td>Variable no definida</td>
            <td>false</td>
            <td>true</td>
        </tr>
    </table>

    <form action="" method="get">
        <br><br>
        <input type="text" name="nombre" id="">
        <br><br>
        <input type="submit" value="ENVIAR">
    </form>

    <?php
        $nombre = $_GET["nombre"];
        $nombre = trim($nombre); // Te cargas los espacios en blanco
        
        echo "<pre>" . $_GET["nombre"] . "</pre>"; // En este caso sacas lo que te entre en el formulario, incluso con los espacios en blanco
        echo "<pre>" . $nombre . "</pre>"; // Devuelve lo que metas en el formulario pero SIN espacios en blanco

        /***
         *  <script>alert("Aloooooooooooo");</script> document.body.innerHTML = "<h1>Sitio Hackeado</h1></script>"; <b onmouseover =alert("ALoooooo")> Get Closer.... </b>
         * 
         * Con este simple comando podriamos mandar inyecciones HTML para poder mandar cosas al servidor
         * Nosotros NO QUEREMOS ESO 
         * 
         * Por eso utilizariamos htmlspecialchars($nombre_varibale); Esta funcion convierte/sustitulle los caracteres especiales que metamos en nuestro formularios a caracteres HTML. Por lo que ejecuciones, scripts, etc. No serán ejecuados
         * */
        $nombre = htmlspecialchars($nombre);
    ?>
</body>
</html>