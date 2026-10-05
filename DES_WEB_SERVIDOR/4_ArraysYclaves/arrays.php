<?php
    $salto = "<br>";
    $dobleSalto = "<br><br>";

    //1. ARRAY INDEXADO: claves numericas automaticas desde 0
    $frutas = []; //CReamos array vacio
    $frutas = ["Manzanas", "Peras", "Piña"]; //Creamos arrays con valores ya predefinidos

    echo $frutas[0].$salto;
    //echo $frutas; no podemos hacer echo de un array entero
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    var_dump($frutas);

    echo $frutas[9].$salto;

    echo "$dobleSalto";

    //2. ARRAYS ASOCIATIVOS. Son arrays cuya particularidad es que accedemos a los valores de dichos arrays a traves de claves y no por posiciones.

    //Creacion
    $personas = ["2adaw" => "Samu", "2bdaw" => "Alguien", "2com" => "alguna tia"];
    echo $personas["2adaw"].$salto;
    
    echo "$dobleSalto";
    
    //Como meter valores nuevos a mi array ya creado antes
    $personas["2tresde"] = "vini";
    echo "<pre>";
    print_r($personas);
    echo "</pre>";


    //AÑADIR, MODIFICAR Y ELIMINAR ELEMENTOS DENTRO DE UNA ARRAY
    print_r($frutas);
    echo ("$dobleSalto");
    

    //Añadir
    $frutas[] = "Coco";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo ("$dobleSalto");
    

    //Añadir donde yo quiera (con lo que conlleva)
    //PLANTILLA: $array[posicion] = "nuevoValor";
    $frutas[9] = "Platano";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo ("$dobleSalto");


    //Eliminar valores
    //PLANTILLA: unset($array[valor]);
    //CARGARME EL VALOR Y LA POSICION DENTRO DEL ARRAY
    unset($frutas[2]);
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo ("$dobleSalto");


    //Modificar valores
    //PLANTILLA: $array[posicion] = "nuevoValor";
    $frutas[1] = "Sandia";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo ("$dobleSalto");


    // --------------- \\

    //PARA VER EL TAMAÑO DEL ARRAY
    //PLANTILLA: .count(array);

    echo "El tamaño del array frutas es: ".count($frutas);


    //[lo que hace]
    //PLANTILLA: array_values($array);
    echo "$dobleSalto";
    print_r(array_values($frutas));

echo "$dobleSalto";

    //COMPROBAR CLAVES
    //PLANTILLA: isset($variable) => si la funcion tiene un valor DISTINTO de null (booleano)
    $animales = ["mamifero" => "gato", "reptiles" => "lagarto", "aves" => "gaviola", "insecto" => "hormiga", "peces" => "Pez Espada"];
    echo "<pre>";
    print_r($animales);
    echo "</pre>";
    echo ("$dobleSalto");

    echo 'isset($variable)'.$salto;
    var_dump(isset($animales["algo"]));

echo ("$dobleSalto");

    //array_key_exists(clave a probar, $array) => booleano si existe esa clave en el array
    echo 'array_key_exists(clave a probar, $array) || (true)'.$salto;
    var_dump((array_key_exists("mamifero", $animales)));
echo ("$dobleSalto");
    echo 'array_key_exists(clave a probar, $array) || (false)'.$salto;
    var_dump((array_key_exists("algo", $animales)));

echo ("$dobleSalto");

    //OPERACION DE FUSION NULO
    //PLANTILLA: [array] ?? valor a salir
    //Sirve para combrobar si una varibale tien un valor distinto a nulo, en el caso en el que esa variable tenga valor nulo se muestra un valor/mensaje alternativo

    echo $animales["Anfibios"] ?? "No existe";
?>