<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO PLANETAS EXAMEN 2BDAW (SUPER GILIPOLLAS)</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="ejercicio_planetas" value="ej1">

        <label> Peso: <input type="text" name="peso"></label>
        
        <label> Planeta de origen</label>
        <select name="planetaOrigen">
            <option value="tierra">Tierra</option>
            <option value="luna">Luna</option>
            <option value="marte">Marte</option>
            <option value="jupiter">Júpiter</option>
        </select>

        <label> Planeta de destino</label>
        <label><input type="radio" name="planetaDestino" value="tierra">🌍 Tierra</label>
        <label><input type="radio" name="planetaDestino" value="luna">🌙 Luna</label>
        <label><input type="radio" name="planetaDestino" value="marte">🔴 Marte</label>
        <label><input type="radio" name="planetaDestino" value="jupiter">🪐 Júpiter (el de la foto es Saturno)</label>
<br>
        <input type="submit" value="CALCULAR">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["ejercicio_planetas"]) && $_POST["ejercicio_planetas"] == "ej1"){

                // ARRAY
                $planetas = [
                    "tierra"  => ["nombre" => "Tierra",  "icono" => "🌍", "gravedad" => 9.81],
                    "luna"    => ["nombre" => "Luna",    "icono" => "🌙", "gravedad" => 1.62],
                    "marte"   => ["nombre" => "Marte",   "icono" => "🔴", "gravedad" => 3.71],
                    "jupiter" => ["nombre" => "Júpiter", "icono" => "🪐", "gravedad" => 24.79]
                ];
                // factor = gravedad del destino / gravedad del origen (calculo PARA MULTIPLICAR por el peso)

                // CAPTURAMOS LAS VARIABLES
                $peso = $_POST["peso"];
                $planetaOrigen = $_POST["planetaOrigen"];
                $planetaDestino = $_POST["planetaDestino"];

                // CALCULO GRAVEDAD
                $gravedadOrigen = $planetas[$planetaOrigen]["gravedad"];
                $gravedadDestino = $planetas[$planetaDestino]["gravedad"];

                // ICONOS
                $iconoOrigen = $planetas[$planetaOrigen]["icono"];
                $iconoDestino = $planetas[$planetaDestino]["icono"];

                $factor = $gravedadDestino / $gravedadOrigen;
                $factorRedondo = round($factor, 4);
                $pesoPlaneta = $peso * $factor;
                $pesoRedondo = round($pesoPlaneta, 2);


                echo ("Si en $iconoOrigen $planetaOrigen pesas $peso kg, en $iconoDestino $planetaDestino pesarias $pesoRedondo <br>");

                echo ("1 kg en $planetaOrigen = $factorRedondo kg en $planetaDestino");

            }
        }
    ?>
</body>
</html>