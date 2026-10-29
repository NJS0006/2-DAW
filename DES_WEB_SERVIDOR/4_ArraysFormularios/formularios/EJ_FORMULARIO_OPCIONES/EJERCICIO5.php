<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>EJERCICIO 5</h3>
    <p>Dado un array bidimensional, crea un formulario con dos listas desplegables en el que en la primera lista se especifique a traves de que columna vamos a ordenar y la seunda especifica el orden que se aplicará</p>

    <!-- HTML -->
    <form action="tabla.php" method="post">
        <select name="columna">
            <option disable selected>ELIGE UNA PUTA OPCION</option>
            <option value="id">ID</option>
            <option value="nombre">NOMBRE</option>
            <option value="salario">SALARIO</option>
        </select>
    </form>


    <!-- PHP -->
    <?php
        ($_SERVER["REQUEST_METHOD"] == "POST");
        if (isset($_POST["formularios"]) && $_POST["formularios"] == "ejConj"){
            
        }
    ?>
</body>
</html>