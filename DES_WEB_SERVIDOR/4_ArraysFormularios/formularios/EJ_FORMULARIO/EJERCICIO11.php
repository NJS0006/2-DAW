<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 11 | ARRAYS Y FORMULARIOS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>CESTA DE LA COMPRA</h3>
    <?php
        $productos = [
            "manzanas" => ["nombre" => "Manzanas", "precio" => 1.50, "categoria" => "Alimentación", "iva" => 0.04],
            "leche" => ["nombre" => "Leche", "precio" => 0.90, "categoria" => "Alimentación", "iva" => 0.04],
            "pan" => ["nombre" => "Pan", "precio" => 1.20, "categoria" => "Alimentación", "iva" => 0.04],
            "cerveza" => ["nombre" => "Cerveza", "precio" => 2.50, "categoria" => "Bebidas", "iva" => 0.10],
            "refresco" => ["nombre" => "Refresco", "precio" => 1.80, "categoria" => "Bebidas", "iva" => 0.10],
            "raton" => ["nombre" => "Ratón inalámbrico", "precio" => 25.00, "categoria" => "Electrónica", "iva" => 0.21]
        ];
    ?>

    <form action="" method="post">
        <input type="hidden" name="formulario" value="EjListaCompra">
        <label> Cantidad Manzanas (1.50€/kg - Alimentacion): </label> <input type="text" name="manzanas">
<br><br>
        <label> Cantidad Leche (0.90€/kg - Alimentacion):    </label> <input type="text" name="manzanas"> 
<br><br>
        <label> Cantidad Pan (1.20€/kg - Alimentacion): </label> <input type="text" name="manzanas">        
<br><br>
        <label> Cantidad Cerveza (2.50€/kg - Alimentacion): </label> <input type="text" name="manzanas" id=""> <br><br>
        <label> Cantidad Refresco (1.80€/kg - Alimentacion): </label> <input type="text" name="manzanas" id=""> <br><br>
        <label> Cantidad Ratón inalámbrico (25.00€/kg - Alimentacion): </label> <input type="text" name="manzanas" id=""> <br><br>
        <input type="submit" value="ENVIAR">
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["formulario"]) && ($_POST["formulario"] == "EjListaCompra")){
                
            }
        }
    ?>
</body>
</html>