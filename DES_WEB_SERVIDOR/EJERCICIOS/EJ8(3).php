<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 8 (3)</title>
</head>
<body>
    <h2>EJERCICIO 8 (3)</h2>
    <p>Empiezas 0€ y ahorras 40€ a la semana hasta alcanzar o superar los 4K€.</p>
    <p>VERSIÓN 1: Calcula cuántas semanas debes de estar ahorrando para llegar o superar los 4K</p>
    <p>VERSIÓN 2: Añadir un gasto de 20€ cada cuarta semana para ir a cenar contigo mismo. Calcular cuántas semanas debe estar ahorrando para llegar a los 4K Y por cada semana que pase, mostrar en un párrafo el dinero aportado, el gastado y lo ahorrado hasta ese momento: Corrige: Miguelito CORREGIDO</p>

    <!-- VERSION 1 --!>
    <?php
        $dinero = 0;
        $numeroSemanas = 0;

        do{
            $dinero += 40;
            $numeroSemanas++;
        }while ($dinero <= 4000);

        echo "(VERSION 1) Llego a los 4000 pavos en la semana numero $numeroSemanas <br>";
    ?>

    <!-- VERSION 2 --!>
    <?php
        $dinero = 0;
        $numeroSemanas = 0;
        do{
            $dinero += 40;
            if ($numeroSemanas % 4 == 0){
                $dinero -= 20;
            }
            $numeroSemanas++;
        }while ($dinero <= 4000);

        echo "(VERSION 2) Llego a los 4000 pavos en la semana numero $numeroSemanas";
    ?>
</body>
</html>