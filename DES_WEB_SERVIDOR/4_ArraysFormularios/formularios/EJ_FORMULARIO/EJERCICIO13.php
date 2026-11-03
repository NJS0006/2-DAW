<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO IRPF | FORMULARIO</title>
</head>
<body>
    <form action="" method="post">
<br><br>
        <input type="hidden" name="formulario">
        <label>Salario bruto: <input type="text" name="salarioBruto"></label>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    // >0 - <=12 450 -> 19%
    // >12.450 - <=20.000 -> 24%
    // >20.200 - <=35.200 -> 30%
    // >35.200 - <=40.000 -> 37%
    // 40.000 > -> 47%

    // CALCULO: [(NUM - NUM.MAX) * PORCENTAJE]

    $tramos = [
        [0, 12450, 0.19],
        [12451, 20200, 0.24],
        [20201, 35200, 0.30],
        [35201, 60000, 0.37],
        [60001, 300000, 0.45],
        [300001, INF, 0.47]
    ];

    // CREAR UN FORMULRIO CON UN SOLO CAMPO NUMERICO (SALARIO BRUTO) => CUANDO SE ENVIE EL FORMULARIO, APARECERA UN ERROR SI LO QUE ME LLEGA ES UN NUMERO NEGATIVO O UNA CADENA, Y SI SE ENVIA UN VALOR NUMERICO POSITIVO APARECERA UNA TABLA DEBAJO DEL FORMULARIO CON UNA SOLA LINEA CON LA SIGUIENTES COLUMNAS: BRUTO || NETO || IMPUESTO TOTAL || NUMERO DE TRAMOS

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["formulario"])){
            
            $salarioBruto = $_POST["salarioBruto"];

            if(!is_numeric($salarioBruto) || $salarioBruto < 0){
                echo "<br>Como COÑO vas a meterme un salario que no sea un numero o UN NUMERO MERO QUE 0 <br><br> GILIPOLLAS";
            }
            else{
                $totalImpuestos = 0;
                $numeroTramo = 0;
    
                foreach ($tramos as $tramo){
                    list($min, $max, $porcentaje) = $tramo;
    
                    // ENTRADA CON CALCULO MAX
                    if ($salarioBruto > $max){
                        $baseTramo = ($max - $min);
                        $totalImpuestos += $baseTramo * $porcentaje;
                        $numeroTramo++;
                    }
                    // CALCULO DE NUSTRO SALARIO
                    else if (($salarioBruto > $min)&&($salarioBruto <= $max)){
                        $baseTramo = ($salarioBruto - $min);
                        $totalImpuestos += $baseTramo * $porcentaje;
                        $numeroTramo++;
                    }
                }

                $salarioNeto = $salarioBruto - $totalImpuestos;

                // 2. MOSTRAR LA TABLA DE RESULTADOS
                echo "<br><br>";
                echo "<table border='1' cellpadding='8' cellspacing='0'>";
                echo "<tr>
                        <th>BRUTO</th>
                        <th>NETO</th>
                        <th>IMPUESTO TOTAL</th>
                        <th>NUMERO DE TRAMOS</th>
                    </tr>";
                echo "<tr>
                        <td>" . number_format($salarioBruto, 2) . " €</td>
                        <td>" . number_format($salarioNeto, 2) . " €</td>
                        <td>" . number_format($totalImpuestos, 2) . " €</td>
                        <td>" . $numeroTramo . "</td>
                    </tr>";
                echo "</table>";
            }
        }


    }
?>