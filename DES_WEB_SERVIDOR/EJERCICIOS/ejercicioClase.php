<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    
    <p>La biblioteca del insti tiene los siguientes libros: "El quijote", "1984", "Dune" y "Matilda"</p>
    <ul>
        <li>Crea la función "unirConComas (Sarray)", que devuelva un texto con todos los valores separados por coma (sin coma al final). La usarás en el resto de ejerciciosAñade "Momo", "Drácula" y "El perfume" al final de la biblioteca Se piden prestados Dune y Hamlet.</li>
        <li>Para cada petición, busca la posición del libro y si está, crea un array nuevo sin ese libro, de modo que no queden huecos y muestra lo siguiente: "Prestado: Dune" Y en caso de que el libro no lo tenga la biblioteca, "No disponible: Hamlet"</li>
        <li>Muestra la lista numerada (1. El Quijote, 2. 1984...), el total de libros y, en una sola línea, los libros en orden inverso</li>
    </ul>

    <h3>Ejercicio 2</h3>
    
    <p>Una tienda informatica guarda su stock en un array asociativo con la siguiente for de producto -> unidades:</p>
    <ul>
        <li>Crear un stock original en que tengamos 12 teclados, cero ratones, 5 monitores 3 webcams y 0 altavoces</li>
        <li>Crar una funcion "estadoStock()" que devuleva "Agotado(0)", "Pocas unidades (0-3)", o "Disponible(>3)"</li>
        <li>Crear una tabla incial con 3 columnas. La primera contendrá el nombre del producto, la segunda el número de unidades disponibles, y el tercero el resultado de la función "estadoStock()". Además, si no quedan unideades, la fila tendra el color de fondo rojo. Si quedan pocas, amarillo. Y si está disponible azul</li>
        <li>Llega un pedido de reposicion: raton 10; webcam 2; microfono 7. Suma las unidades a los productos existentes. Si el producto no existía antes, añadelo e indica en un echo "nuevo producto: Microfono"</li>
    </ul>

    <!--EJERCICIO 1-->
    <?php
        $array = [
            "Teclados" => 12,
            "Ratones" => 0,
            "Monitores" => 5,
            "WebCams" => 3,
            "Altavoces" => 0
        ];

        function estadoStock($num){
            return match ($num) {
                0 => "Agotado",
                1, 2, 3 => "Pocas unidades",
                default => "Disponible"
            };
        }
    ?>

    <!--EJERCICIO 2-->
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Unidad Disponible</th>
                <th>Estado</th>
            </tr>            
        </thead>

        <tbody>
            <?php 
                foreach ($array as $producto => $unidades):
                //Color de las filas
                /*$colorFondo = "";
                if($unidades == 0){
                    $colorFondo = "red";
                }
                else if (($unidades > 0)&&($unidades <= 3)){
                    $colorFondo = "yellow";
                }
                else{
                    $colorFondo = "blue";
                }
                */

                $color = match ($unidades) {
                    0 => "red",
                    1, 2, 3 => "yellow",
                    default => "blue"
                };
                ?>
                <tr style="background-color: <?php echo $color; ?>;">
                    <td><?php echo "$producto";?></td>
                    <td><?php echo "$unidades";?></td>
                    <td><?php echo estadoStock($unidades);?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
</body>
</html>