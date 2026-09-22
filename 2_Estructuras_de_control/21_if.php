<?php
    // FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF

    $a = -3;

    //Primera forma
    if ($a > 0){
        echo "<p>El numero es positivo</p>";
    }

    //Segunda forma
    if ($a > 0) echo "<p>El numero es positivo<p>";

    //Tercera forma
    if ($a > 0):
        echo "<p>El numero es positivo<p>";
    endif;


    // FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF...ELSE

    //Primera forma
    if($a > 0){
        echo "<p>El numero es positivo</p>";
    }else{
        echo "<p>El numero es cero o negativo</p>";
    }

    //Segunda forma
    if($a > 0) echo "<p>El numero es positivo";
    else echo "<p>El numero es cero o negativo</p>";

    //Tercera forma
    if($a > 0):
        echo "<p>El numerp es positivo</p>";
    else:
        echo "<p>El numero es cero o negativo</p>";
    endif;