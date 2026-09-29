<?php
echo '//EJERCICIO 3// <br>';
echo 'Crear una función llamada meses que, dependiendo del número que entre y haciendo uso del match, devolverá el nombre del mes correspondiente. ¡¡IMPORTANTE!! Controlad que el número no sea menor a 1 o mayor a 12 ';

echo "<br>";
echo '-----';
echo "<br>";

function meses ($numeroMes){
    return match ($numeroMes) {
        1 => 'Enero',
        2 => 'Febrero',
        3 => 'Marzo',
        4 => 'Abril',
        5 => 'Mayo',
        6 => 'Junio',
        7 => 'Julio',
        8 => 'Agosto',
        9 => 'Septiembre',
        10 => 'Octubre',
        11 => 'Noviembre',
        12 => 'Diciembre',
        default => 'El mes no puede ser ni menor que 1 ni mayor que 12 (gilipollas)'
    };
}
echo meses(24);
?>