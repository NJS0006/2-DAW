<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO CLASIFICACION LIGA</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="ejercicios_repaso" value="EJ_LIGA">

        <select name="equipo">
            <option value="leones">Leones</option>
            <option value="Aguilas">Aguilas</option>
            <option name="equipo" value="tiburones">Tiburones</option>
            <option name="equipo" value="osos">Osos</option>
            <option name="equipo" value="lobos">Lobos</option>
            <option name="equipo" value="halcones">Halcones</option>
            <option name="equipo" value="toros">Toros</option>
        </select>

        <input type="submit" value="VER CLASIFICACION">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["ejercicios_repaso"]) && $_POST["ejercicios_repaso"] == "EJ_LIGA"){
        
                // CAPTURAR VARIABLES
                $tuEquipo = $_POST["equipo"];

                // ARRAY
                $equipos = [
                    "leones"    => ["nombre" => "Leones FC",      "ganados" => 5, "empatados" => 2, "perdidos" => 1, "gf" => 15, "gc" => 7],
                    "aguilas"   => ["nombre" => "Águilas United", "ganados" => 5, "empatados" => 2, "perdidos" => 1, "gf" => 13, "gc" => 8],
                    "tiburones" => ["nombre" => "Tiburones CF",   "ganados" => 4, "empatados" => 3, "perdidos" => 1, "gf" => 12, "gc" => 6],
                    "osos"      => ["nombre" => "Osos Athletic",  "ganados" => 3, "empatados" => 2, "perdidos" => 3, "gf" => 9,  "gc" => 9],
                    "lobos"     => ["nombre" => "Lobos SD",       "ganados" => 3, "empatados" => 2, "perdidos" => 3, "gf" => 10, "gc" => 11],
                    "halcones"  => ["nombre" => "Halcones CD",    "ganados" => 1, "empatados" => 1, "perdidos" => 6, "gf" => 7,  "gc" => 14],
                    "toros"     => ["nombre" => "Toros RC",       "ganados" => 0, "empatados" => 2, "perdidos" => 6, "gf" => 6,  "gc" => 17]
                ];

                // CREACION DE NUEVAS TABLAS
                foreach ($equipos as $clave => $equipo){
                    $equipos[$clave]["puntos"] = ($equipo["ganados"] * 3) + $equipo["perdidos"];
                    $equipos[$clave]["diferencia"] = $equipo["gf"] - $equipo["gc"];
                }

                // ORDEN
                // array_column NOS PERMITE SACAR UNA UNA COLUMNA ESPECIFICA DEL ARRAY BIDI PARA PODER TRABJAR CON ELLA
                $ptos = array_column($equipos, "puntos");
                $nombre = array_column($equipos, "nombre");

                array_multisort($ptos, SORT_DESC, $nombre, SORT_ASC, $equipos);
    ?>
            <table border="1" cellpadding="8" style="border-collapse: collapse; text-align: center;">
                <tr>
                    <th>Pos</th>
                    <th>Equipo</th>
                    <th>G</th>
                    <th>E</th>
                    <th>P</th>
                    <th>DIF</th>
                    <th>PTS</th>
                </tr> 
    <?php
            $pos = 1;

            foreach ($equipos as $clave => $equipo){
                if($tuEquipo == $clave) $color = "yellow";
                else $color = "white";
            
    ?>
            <tr style="background-color: <?= $color ?>;">
                <td><?= $pos ?></td>
                <td><?= $equipo["nombre"] ?></td>
                <td><?= $equipo["ganados"] ?></td>
                <td><?= $equipo["empatados"] ?></td>
                <td><?= $equipo["perdidos"] ?></td>
                <td><?= $equipo["diferencia"] ?></td>
                <td><?= $equipo["puntos"] ?></td>
            </tr>
            <?php
            $pos++;
            }
        }
    }
    ?>
</body>
</html>