<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 13 | ARRAYS Y FORMULARIOS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>EJERCICIO 13</h1>
    <h3>Crea una calculadora que procese el salario bruto mensual y calcule el salario neto aplicando las
    deducciones legales.</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej13">

        <label>Salario Bruto Mensual (€): <input type="text" name="salarioBruto"></label>

        <label>Tipo de Contrato: </label>
        <select name="tipoContratos">
            <option value="" selected disabled hidden>Selecciona una opcion</option>
            <option value="indefinido">Contrato Indefinido</option>
            <option value="temporal">Contrato Temporal</option>
            <option value="practicas">Contrato Practicas</option>
        </select>

        <label><input type="checkbox" name="siIncluir"> Si incluir pagas extras prorrateadas </label>
        <label><input type="checkbox" name="noIncluir"> No incluir pagas extras prorrateadas </label>
        
        <input type="submit" value="HACER DECLARACION">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"])  && $_POST["relacion_ejercicios"] == "ej13"){

                // CAPTURAMOS LAS VARIABLES
                $salarioBruto = $_POST["salarioBruto"];
                $tipoContratos = $_POST["tipoContratos"];

                $siIncluir = isset($_POST["siIncluir"]) ? $_POST["siIncluir"] : "si"; 
                $noIncluir = isset($_POST["noIncluir"]) ? $_POST["noIncluir"] : "no";


                // VARIABLES DE COPIA
                $copiaSalarioBruto = $salarioBruto;

                // 1. OPCION PRORRATEO
                if($siIncluir){
                    $prorrateo = $copiaSalarioBruto * (2/12);
                    $salBrutoTotalMensual = $copiaSalarioBruto + $prorrateo;
                    $copiaSalBrutoMensual = $salBrutoTotalMensual;
                }

                // CALCULO SEGURIDAD SOCIAL
                $calcSeguridadSocial = $salBrutoTotalMensual * 0.0635;

                // DETERMINACION DEL PORCENTAJE E IRPF
                /**
                 * Hasta 1.500€/mes: 10%
                 * 1.500€ - 2.500€/mes: 15%
                 * 2.500€ - 4.000€/mes: 20%
                 * Más de 4.000€/mes: 25%
                 */

                if($salBrutoTotalMensual < 1500){
                    $irpfCalculado = $salBrutoTotalMensual * 0.10;
                }
                elseif (($salBrutoTotalMensual >= 1500) && ($salBrutoTotalMensual < 2500)){
                    $irpfCalculado = $salBrutoTotalMensual * 0.15;
                }
                elseif (($salBrutoTotalMensual >= 2500) && ($salBrutoTotalMensual < 4000)){
                    $irpfCalculado = $salBrutoTotalMensual * 0.20;
                }
                elseif ($salBrutoTotalMensual >= 4000){
                    $irpfCalculado = $salBrutoTotalMensual * 0.25;
                }

                // CALCULO SALARIO NETO
                // Bruto Total - Seguridad Social - IRPF

                $salarioNeto = $salBrutoTotalMensual - $calcSeguridadSocial - $irpfCalculado;

                echo ("Salario bruto metido: $salarioBruto <br>");

                echo ("Salario Bruto Mensual (Despues de los calculos): $salBrutoTotalMensual <br>");
                echo ("Salario despues del calculo de la SGS: $calcSeguridadSocial <br>");

                echo ("Salario Neto total: $salarioNeto <br>");
            }
        }
    ?>
</body>
</html>