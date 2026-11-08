<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4 | FORMULARIOS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>Introduce dos listas de números y realiza operaciones entre ellas: unión, intersección y diferencias</h3>
    <h4>EJ: 
    C1: 1, 2, 3, 7 || C2: 4, 9, 5, 1
    Unión = 1, 2, 3, 7, 4, 9, 5, 1
    Intersección: C1 - C2 = 2, 3, 7 || C2 - C1 = 4, 9, 5 
    </h4>

    <form action="" method="post">
        <input type="hidden" name="relacion_ejercicios" value="ej4">
        
        <label> Lista 1: <input type="text" name="lista1"></label>
<br><br>
        <label> Lista 2: <input type="text" name="lista2"></label>
<br><br>
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
</body>
</html>