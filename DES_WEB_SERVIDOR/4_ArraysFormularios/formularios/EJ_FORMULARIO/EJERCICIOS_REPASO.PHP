<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIOS REPASO EXAMEN (se hará todo el el mismo archivo)</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!-- FUNCIONES UTILES QUE ME AHORRAN TIEMPO -->
    <?php
        function dobleSalto(){
            echo ("<br><br>");
        }

        function mostrarArray($array){
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }
    ?>

<!-- //////////////////////////////////////// -->

    <h1>EJERCICIO 1</h1>
    <h3>Introduce una lista de números separados por comas y elige cómo ordenarlos.</h3>
    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej1">

        <label>Lista de Numeros: <input type="text" name="listaNumeros"></label>
        <label>Orden de ordenacion: <input type="text" name="orden"></label>

        <input type="submit" value="ORDENAR">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej1"){
                $listaNumeros = $_POST["listaNumeros"];
                $orden = $_POST["orden"];

                $listaNumeros = explode(",", $listaNumeros);
                switch ($orden){
                    case "Ascendente":
                        sort($listaNumeros);
                        echo "<pre>";
                        print_r($listaNumeros);
                        echo "</pre>";
                    break;

                    case "Descendente":
                        arsort($listaNumeros);
                        echo "<pre>";
                        print_r($listaNumeros);
                        echo "</pre>";
                }
            }
        }
    ?>

<!-- ----------------------------- -->

    <h1>EJERCICIO 2</h1>
    <h3>Busca si una fruta existe en el siguiente array predefinido</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej2">

        <label>Que fruta quieres buscar? <input type="text" name="buscarFruta"></label>

        <input type="submit" value="BUSCAR FRUTA">

    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej2"){

                $arrayFrutas = ["Manzana", "Pera", "Plátano", "Naranja", "Fresa", "Uva", "Sandía", "Melón","Piña", "Kiwi"];

                $frutaBuscar = $_POST["buscarFruta"];

                if(in_array($frutaBuscar, $arrayFrutas)){
                    echo ("Tu fruta ($frutaBuscar) está en el array <br>");
                    echo ("En nustro array están las frutas: <br>");
                    
                    echo "<pre>";
                    print_r($arrayFrutas);
                    echo "</pre>";
                }
                else{
                    echo ("Tu fruta ($frutaBuscar) NO está en el array <br>");
                    echo ("En nustro array están las frutas: <br>");
                    
                    echo "<pre>";
                    print_r($arrayFrutas);
                    echo "</pre>";
                }

            }
        }
    ?>

<!-- ----------------------------- -->

    <h1>EJERCICIO 3</h1>
    <h3>Introduce las notas de varios estudiantes y obtén estadísticas completas</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej3">
        
        <label> Notas alumnos: <input type="text" name="notas"></label>

        <input type="submit" value="ENVIAR NOTAS">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej3"){
                // CAPTURAMOS LA CADENA
                $notas = $_POST["notas"];
                
                // LO EXPLOTAMOS
                $arrayNotas = explode(",", $notas);

                // VARIABLES DE GUIA DE NOTAS
                $sobresalientes = 0;
                $aprobados = 0;
                $suspensos = 0;
                
                // BUCLE PARA SABER LA GUA DE NOTAS
                for ($i = 0; $i < count($arrayNotas); $i++) { 
                    if ($arrayNotas[$i] < 5){
                        $suspensos++;
                    }
                    elseif (($arrayNotas[$i] >= 5) && ($arrayNotas[$i] <= 7)) {
                        $aprobados++;
                    }
                    elseif ($arrayNotas[$i] > 7) {
                        $sobresalientes++;
                    }
                }

                echo ("Las notas son:");
                echo mostrarArray($arrayNotas);
                echo ("Hay un total de: <br>
                Sobresalientes: $sobresalientes <br>
                Aprobados: $aprobados <br>
                Suspensos: $suspensos");
            }
        }
    ?>

<!-- ----------------------------- -->

    <h1>EJERCICIO 4</h1>
    <h3>Introduce dos listas de números y realiza operaciones entre ellas: unión, intersección y diferencias</h3>
    <h4>EJ: 
    C1: 1, 2, 3, 7 || C2: 4, 9, 5, 1
    Unión = 1, 2, 3, 7, 4, 9, 5, 1
    Intersección: C1 - C2 = 2, 3, 7 || C2 - C1 = 4, 9, 5 
    </h4>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej4">
        
        <label> Lista 1: <input type="text" name="lista1"></label>
        <label> Lista 2: <input type="text" name="lista2"></label>

        <input type="submit" value="ENVIAR NOTAS">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej4"){

                // CAPTURAR LAS LISTA DEL FORM
                $lista1 = $_POST["lista1"];
                $lista2 = $_POST["lista2"];

                // CONVERTIMOS LAS LISTAS EN ARRAYS
                $arrayLista1 = explode(",", $lista1);
                $arrayLista2 = explode(",", $lista2);

                // UNIR LOS DOS ARRAYS
                $arrayUnido = array_merge($arrayLista1, $arrayLista2);
                echo mostrarArray($arrayUnido);

                // SACAR ELEMENTOS REPETIDOS (ARRAY COMPLETO)
                $arraySinRepetir = array_unique($arrayUnido);
                echo mostrarArray($arraySinRepetir);

                // QUITAR LOS REPETIDOS (ARRAY SUELTO)
                $copiaArrayLista1 = $arrayLista1;
                $copiaArrayLista2 = $arrayLista2;

                for ($i=0; $i < count($copiaArrayLista1); $i++) {
                    if(in_array($copiaArrayLista1[$i], ($arrayLista2))){
                        unset($copiaArrayLista1[$i]);
                    }
                }

                for ($j=0; $j < count($copiaArrayLista1); $j++) {
                    if(in_array($copiaArrayLista2[$j], ($arrayLista1))){
                        // SI HICIERAMOS "in_array($copiaArrayLista2[$j], ($copiaArrayLista1))" VOLVERIAMOS A LO MISMO Y SACARIA EL ARRAY ENTERO, YA QUE EN EL FOR ANTERIOR YA SE HABRIA ELIMINADO. HACEMOS LA COPIA PARA QUE BORRE DE AHI, PERO SIGAMOS TENIENDO9 UN ARRAY ORIGINAL CON EL QUE COMPARAR CUANDO BORREMOS EL CARACTER REPETIDO. 
                        unset($copiaArrayLista2[$j]);
                    }
                }

                echo mostrarArray($copiaArrayLista1);
                echo mostrarArray ($copiaArrayLista2);
            }
        }
    ?>

<!-- ----------------------------- -->

    <h1>EJERCICIO 5</h1>
    <h3>Genera un array de números aleatorios y filtra según un criterio específico</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej5">

        <label> Cantidad de numeros a generar: <input type="text" name="cantidadNum"></label>
        <label> Valor mínimo: <input type="text" name="valorMin"></label>
        <label> Valor máximo: <input type="text" name="valorMax"></label>
        <label> Filtro: </label>
        <select name="filtros">
            <option value="" selected disabled hidden>Seleciona una opcion</option>
            <option value="numPares">Numeros Pares</option>
            <option value="numImpares">Numeros Impares</option>
            <option value="mayoCinc">Mayores de 50</option>
            <option value="menCinc">Menores de 50</option>
            <option value="numPrim">Numeros primos</option>
            <option value="numPerf" disabled>Numeros perfectos</option>
        </select>
        <input type="submit" value="HACER CALCULOS">
    </form>
    
    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej5"){

                // CAPTURAMOS LAS VARIABLES
                $cantNum = $_POST["cantidadNum"];
                $valorMin = $_POST["valorMin"];
                $valorMax = $_POST["valorMax"];
                $filtros = $_POST["filtros"];
                
                // CREACION DEL ARRAY
                $arrayAleatorio = [];
                for ($i=1; $i <= $cantNum; $i++) { 
                    $arrayAleatorio[$i] = random_int($valorMin, $valorMax);
                }
                
                echo mostrarArray($arrayAleatorio);

                // ARRAY DE GUARDADO
                $variableNum = [];

                switch ($filtros){
                    case "numPares":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] % 2 == 0){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "numImpares":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] % 2 != 0){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "mayoCinc":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] >= 50){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "menCinc":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if($arrayAleatorio[$i] <= 50){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;

                    case "numPrim":
                        for ($i=1; $i <= count($arrayAleatorio) ; $i++) { 
                            if(($arrayAleatorio[$i] % 2) && ($arrayAleatorio[$i] % 2)){
                                $variableNum[] = $arrayAleatorio[$i];
                            }
                        }
                        echo mostrarArray($variableNum);
                    break;
                }
            }
        }
    ?>

<!-- ----------------------------- -->

    <h1>EJERCICIO 7</h1>
    <h3>Crea un formulario que reciba 5 notas de exámenes (separadas) (valores entre 0 y 10)</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej7">

        <h4>Dame 5 notas de los ultimoms 5 examenes hechos</h4>
        <label>Nota 1: <input type="text" name="nota1"></label>
        <label>Nota 2: <input type="text" name="nota2"></label>
        <label>Nota 3: <input type="text" name="nota3"></label>
        <label>Nota 4: <input type="text" name="nota4"></label>
        <label>Nota 5: <input type="text" name="nota5"></label>
        <input type="submit" value="EVIAR LAS NOTAS">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] == "ej7"){
                
                // CAPTURAMOS LAS VARIBALES DEL FORMULARIO
                $nota1 = $_POST["nota1"];
                $nota2 = $_POST["nota2"];
                $nota3 = $_POST["nota3"];
                $nota4 = $_POST["nota4"];
                $nota5 = $_POST["nota5"];
                
                // NOTA MEDIA
                $notaMedia = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

                // NOTA MAS ALTA
                $notaMasAlta = 0;
                if (($nota1 > $nota2) && ($nota1 > $nota3) && ($nota1 > $nota4) && ($nota1 > $nota5)){
                    $notaMasAlta = $nota1;
                }
                elseif (($nota2 > $nota1) && ($nota2 > $nota3) && ($nota2 > $nota4) && ($nota2 > $nota5)){
                    $notaMasAlta = $nota2;
                }
                elseif (($nota3 > $nota1) && ($nota3 > $nota2) && ($nota3 > $nota4) && ($nota3 > $nota5)){
                    $notaMasAlta = $nota3;
                }
                elseif (($nota4 > $nota1) && ($nota4 > $nota2) && ($nota4 > $nota3) && ($nota4 > $nota5)){
                    $notaMasAlta = $nota4;
                }
                else{
                    $notaMasAlta = $nota5;
                }

                // NOTA MAS BAJA
                $notaMasBaja = 0;
                if (($nota1 < $nota2) && ($nota1 < $nota3) && ($nota1 < $nota4) && ($nota1 < $nota5)){
                    $notaMasBaja = $nota1;
                }
                elseif (($nota2 < $nota1) && ($nota2 < $nota3) && ($nota2 < $nota4) && ($nota2 < $nota5)){
                    $notaMasBaja = $nota2;
                }
                elseif (($nota3 < $nota1) && ($nota3 < $nota2) && ($nota3 < $nota4) && ($nota3 < $nota5)){
                    $notaMasBaja = $nota3;
                }
                elseif (($nota4 < $nota1) && ($nota4 < $nota2) && ($nota4 < $nota3) && ($nota4 < $nota5)){
                    $notaMasBaja = $nota4;
                }
                else{
                    $notaMasBaja = $nota5;
                }

                // APROBADO | SUSPENDIDO
                if ($notaMedia >= 5){
                    echo "El alumno está aprobado <br>";
                }
                else{
                    echo "El alumno esta suspenso (vaya tonto) <br>";
                }
                
                // NUMERO ASIGNATURAS APROBADAS
                $numAsignaturasAprobadas = 0;
                if ($nota1 >= 5){
                    $numAsignaturasAprobadas++;
                }
                
                // SACADA POR PANTALLA
                echo ("Las notas introducidas son: <br>
                Nota 1: $nota1 <br>
                Nota 2: $nota2 <br>
                Nota 3: $nota3 <br>
                Nota 4: $nota4 <br>
                Nota 5: $nota5 <br>");
                
                echo ("La nota media es: $notaMedia <br>");
                
                echo ("La nota mas alta es: $notaMasAlta <br>");
                
                echo ("La nota mas baja es: $notaMasBaja <br>");
                
                echo ("El numero de aprobados es: $numAsignaturasAprobadas <br>");
            }
        }
    ?>

<!-- ----------------------------- -->

    <h1>EJERCICIO 11</h1>
    <h3>Crea un sistema de cesta de la compra que gestione múltiples productos con sus precios y cantidades.</h3>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej11">

        <label> Manzanas: <input type="text" name="cantManzanas"></label>
        <label> Leche: <input type="text" name="cantLeche"></label>
        <label> Pan: <input type="text" name="cantPan"></label>
        <label> Cerveza: <input type="text" name="cantCerveza"></label>
        <label> Refrescos: <input type="text" name="cantRefrescos"></label>
        <label> Ratón Inalámbrico: <input type="text" name="cantRaton"></label>

        <input type="submit" value="ENVIAR LISTA DE LA COMPRA">
    </form>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["relacion_ejercicios"]) && $_POST["relacion_ejercicios"] = "ej11"){
                
                // CAPTURAR VARIABLES
                $cantidadManzanas = $_POST["cantManzanas"];
                $cantidadLeche = $_POST["cantLeche"];
                $cantidadPan = $_POST["cantPan"];
                $cantidadCerveza = $_POST["cantCerveza"];
                $cantidadRefrescos = $_POST["cantRefrescos"];
                $cantidadRaton = $_POST["cantRaton"];
                
                //ARRAY
                $productos = [
                    ["nombre" => "Manzanas",          "precio" => 1.50,  "categoria" => "Alimentación", "iva" => 4,  "cantidad" => $cantidadManzanas],
                    ["nombre" => "Leche",             "precio" => 0.90,  "categoria" => "Alimentación", "iva" => 4,  "cantidad" => $cantidadLeche],
                    ["nombre" => "Pan",               "precio" => 1.20,  "categoria" => "Alimentación", "iva" => 4,  "cantidad" => $cantidadPan],
                    ["nombre" => "Cerveza",           "precio" => 2.50,  "categoria" => "Bebidas",      "iva" => 10, "cantidad" => $cantidadCerveza],
                    ["nombre" => "Refresco",          "precio" => 1.80,  "categoria" => "Bebidas",      "iva" => 10, "cantidad" => $cantidadRefrescos],
                    ["nombre" => "Ratón inalámbrico", "precio" => 25.00, "categoria" => "Electrónica",  "iva" => 21, "cantidad" => $cantidadRaton],
                ];
                
                // VARIBALES ORDENACION
                $totalSinDescuento = 0;
                $totalDescuentos   = 0;
                $totalIva          = 0;
                $hayProductos      = false;
    ?>
    <table>
        <tr>
            <th>Producto</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th>Precio unidad</th>
            <th>Subtotal</th>
            <th>Descuento</th>
            <th>IVA</th>
            <th>Total</th>
        </tr>
    <?php
                // CALCULOS
                foreach ($productos as $producto) {
                    
                    // HACEMOS EL CALCULO PARA EL PRECIO TOTAL RESPECTO A LA CANTIDAD INTRODUCIDA 
                    $subtotal = $producto["cantidad"] * $producto["precio"];
                    $totalSinDescuento = $subtotal;

                    // CONDICION DE DESCUENTO
                    if(($producto["cantidad"] >= 5) && ($producto["cantidad"] < 10)){
                        // HACEMOS UNA VARIABLE PARA EL DESCUENTO PARA DESPUES /100
                        $porcentajeDescuento = 10;
                    }
                    elseif ($producto["cantidad"] >= 10){
                        $porcentajeDescuento = 20;
                    }
                    else{
                        $porcentajeDescuento = 0;
                    }

                    // HACEMOS EL DESCUENTO
                    $descuento = $subtotal * $porcentajeDescuento / 100;

                    // EL IVA SE CALCULA CON LA BASE DEL PRODUCTO YA DESCANTADO 
                    $baseproducto = $subtotal - $descuento;
                    $iva = $baseproducto * $producto["iva"] / 100;

                    $totalProducto = $baseproducto + $iva;

                    // aqui pinto la fila de cada producto con echos en vez de desde html porque estoy usando la funcion number_format para el truncar los decimales, tb se puede sacar la fila desde html intercalando codigo php dentro de cada celda, lo que prefirais
                    echo "<tr>";
                    echo "<td>" . $producto["nombre"] . "</td>";
                    echo "<td>" . $producto["categoria"] . "</td>";
                    echo "<td>" . $producto["cantidad"] . "</td>";
                    echo "<td>" . number_format($producto["precio"], 2) . " €</td>";
                    echo "<td>" . number_format($subtotal, 2) . " €</td>";
                    echo "<td>-" . number_format($descuento, 2) . " € (" . $porcentajeDescuento . "%)</td>";
                    echo "<td>" . number_format($iva, 2) . " € (" . $producto["iva"] . "%)</td>";
                    echo "<td><strong>" . number_format($totalProducto, 2) . " €</strong></td>";
                    echo "</tr>";
                }
            }
        }        
    ?>

<!-- ----------------------------- -->

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