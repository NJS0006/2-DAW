<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej1"){

            // CAPTURAMOS VARIBALES
            $diasInception = $_POST["inception"];
            $diasPararite = $_POST["parasite"];
            $diasInterstellar = $_POST["interstellar"];
            $diasJoker = $_POST["joker"];
            $diasAvengers = $_POST["avengers"];

            // ARRAY
            $peliculas = [
                "inception" => [
                "titulo" => "Inception",
                "genero" => "Ciencia Ficción",
                "precio_dia" => 3.50
                ],
                
                "parasite" => [
                    "titulo" => "Parasite",
                    "genero" => "Thriller",
                    "precio_dia" => 3.00
                ],
                
                "interstellar" => [
                    "titulo" => "Interstellar",
                    "genero" => "Ciencia Ficción",
                    "precio_dia" => 3.50
                ],
                
                "joker" => [
                    "titulo" => "Joker",
                    "genero" => "Drama",
                    "precio_dia" => 2.50
                ],
                
                "avengers" => [
                    "titulo" => "Avengers: Endgame",
                    "genero" => "Acción",
                    "precio_dia" => 4.00
                ]
            ];

            // PRECIO TOTAL
            foreach ($peliculas as $clave => $pelis){
                $pelis[$clave]["Dias"] = $diasInception;
                $pelis[$clave]["precioTotal"] = $peliculas["precio_dia"] * $diasInception;
            }
            ?>
            <table border="1">
                <tr>
                    <th>Pelicula</th>
                    <th>Genero</th>
                    <th>Precio/dia</th>
                    <th>Dias</th>
                    <th>Subtotal</th>
                </tr>

            <?php   
            foreach ($peliculas as $clave => $pelis){
            ?>             
                <tr>
                    <td><?= $pelis["titulo"] ?></td>
                    <td><?= $pelis["genero"] ?></td>
                    <td><?= $pelis["precio_dia"] ?></td>
                    <td><?= $pelis["Dias"] ?></td>
                    <td><?= $pelis["precioTotal"] ?></td>
                </tr>
            </table>
            <?php
            }   
        }

// -------------------- //

        if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej2"){

            // CAPTURAMOS VARIABLES
            $grupoSelec = $_POST["grupo"];

            // ARRAY
            $alumnos = [
                ["nombre" => "Lucia",  "grupo" => "DAW", "nota" => 8.5,  "faltas" => 2],
                ["nombre" => "Marcos", "grupo" => "DAM", "nota" => 6,    "faltas" => 5],
                ["nombre" => "Andrea", "grupo" => "DAW", "nota" => 9.2,  "faltas" => 0],
                ["nombre" => "Pablo",  "grupo" => "DAM", "nota" => 4.5,  "faltas" => 12],
                ["nombre" => "Carmen", "grupo" => "DAW", "nota" => 6,    "faltas" => 3],
                ["nombre" => "Hugo",   "grupo" => "DAM", "nota" => 8.5,  "faltas" => 1],
                ["nombre" => "Sara",   "grupo" => "DAW", "nota" => 3.8,  "faltas" => 14],
                ["nombre" => "Diego",  "grupo" => "DAM", "nota" => 7.25, "faltas" => 4],
                ["nombre" => "Alba",   "grupo" => "DAW", "nota" => 8.5,  "faltas" => 1],
                ["nombre" => "Bruno",  "grupo" => "DAM", "nota" => 6,    "faltas" => 7]
            ];

            $aprobados = 0;
            $suspensos = 0;
            $calculoMedia = 0;


            foreach ($alumnos as $clave => $listado) {
                if($listado["nota"] >= 5){
                    $aprobados++;
                }
                else{
                    $suspensos++;
                }

                $calculoMedia += $listado["nota"];
            }

            
            // ORDEN
            $nota = array_column($alumnos, "nota");
            $nombre = array_column($alumnos, "nombre");
            array_multisort($nota, SORT_DESC, $nombre, SORT_ASC, $alumnos);
        
        ?>

            <table border="1">
                <tr>
                    <th>Posicion</th>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Nota</th>
                    <th>Faltas</th>
                    <th>Estado</th>
                </tr>

        <?php
            $pos = 1;

            foreach ($alumnos as $listado){
                if($grupoSelec == $listado["grupo"]){
        ?>
                    <tr>
                        <td><?= $pos ?></td>
                        <td><?= $listado["nombre"] ?></td>
                        <td><?= $listado["grupo"] ?></td>
                        <td><?= $listado["nota"] ?></td>
                        <td><?= $listado["faltas"] ?></td>
                    </tr>
                </table>
            <?php
            $pos++;               
                }
            }

            echo ("<br> RESUMEN:<br>");

            $media = $calculoMedia / $pos;

            echo ("<br> Nota Media: $media <br>");
            echo("<br> Aprobados: $aprobados | Suspensos: $suspensos <br>");
        }
    }
?>