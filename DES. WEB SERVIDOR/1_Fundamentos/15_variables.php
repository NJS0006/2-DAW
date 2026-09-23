<?php
$salto = "<br>";
$_2saltos = "<br><br>";

    echo "//VARIABLES GLOBALES, Y LOCALES Y ESTATICAS//";
echo $_2saltos;
    echo "VARIABLES LOCALES <br>";
    //Se crean dentro de una funcion y SOLO podemos usarla dentro de esta

    function mostrarAlumno(){
        $nombre = "Nico";
        echo "Desde dentro de la funcion: $nombre <br>";
    }
    mostrarAlumno();
    //Al ser una varibale local definida dentro de la funcion "mostrarAlumno" no se puede usar desde fuera de dicha funcion

echo $_2saltos;

    echo "VARIABLES GLOBALES <br>";
    //Se crean fura de las funciones, se pueden acceder a ellas en todas partes del fichero gracias a la palabra reservada "global".
    
    $modulo = "Desarrollo web en entorno servidor";
    function mostrarCurso(){
        global $modulo;
        echo "Desde dentro de la funcion: $modulo<br>";
    }
    mostrarCurso();

echo $_2saltos;

    echo "VARIABLES LOCALES <br>";

    function contadorConLocal(){
        $cont = 0;
        $cont++;
        echo "Contador local: $cont <br>";
    }
    contadorConLocal(); //1
    contadorConLocal(); //1
    contadorConLocal(); //1
    contadorConLocal(); //1

echo $_2saltos;

    echo "VARIABLES ESTATICAS <br>";
    function contadorConEstatica(){
        static $cont = 0;
        $cont++;
        echo "Cont estatico: $cont <br>";
    }
    contadorConEstatica(); //1
    contadorConEstatica(); //2
    contadorConEstatica(); //3
    contadorConEstatica(); //4

echo $_2saltos;
    //Crea una funcion que duplique el valor de una varibale local iniciada en dos hasta que el resultado de las llamadas a la misma funcion sea 1024

    echo "//EJERCICI0// <br>";
    function duplicador(){
        static $var = 2;
        echo "Numero: $var <br>";
        $var *= 2;
        
    }
    duplicador(); //2
    duplicador(); //4
    duplicador(); //8
    duplicador(); //16
    duplicador(); //32
    duplicador(); //64
    duplicador(); //128
    duplicador(); //256
    duplicador(); //512
    duplicador(); //1024