<?php

    $notas = ["Ana" => 7, "Leo" => 9, "Samu" => 3, "Alba" => 4];

    // Modificar el array usando su clave
    foreach($notas as $nombre => $nota){
        $notas[$nombre] = $nota-1;
    }

    echo "<pre>";
    print_r($notas);
    echo "</pre>";

echo "<br>";

    echo "posicion + valor array <br>";
    $notas = [4, 6, 1, 10, 9, 9];
    foreach($notas as $pos => $valor){
        echo "posicion: $pos nota: $valor <br>";
    }

echo "<br>";

    echo "FUNCIONES PARA TRABAJR CON ARRAYS <br>";
    /**
     * sort() => Ordena array indexado menor - mayor
     * rsort() => Ordena array indexado mayor - menor
     * asort() => Ordena array indexado menor - mayor RESPETANDO LAS CLAVES
     * arsort() => Ordena array indexado mayor - menor RESPETANDO LAS CLAVES
     * ksort() => Ordena array indexado menor - mayor POR CLAVES
     * krsort() => Ordena array indexado mayor - menor POR CLAVES
     */
    $notas = ["Ana" => 7, "Leo" => 9, "Samu" => 3, "Alba" => 4];

    $copia = $notas;
    sort($copia);
    echo "<pre>sort: ";
    print_r($copia);
    echo "</pre>";

echo "<br>";

    $copia = $notas;
    rsort($copia);
    echo "<pre>rsort: ";
    print_r($copia);
    echo "</pre>";

echo "<br>";

    $copia = $notas;
    asort($copia);
    echo "<pre>asort: ";
    print_r($copia);
    echo "</pre>";

echo "<br>";

    $copia = $notas;
    arsort($copia);
    echo "<pre>arsort: ";
    print_r($copia);
    echo "</pre>";

echo "<br>";
echo "<br>";

    //IN_ARRAY
    //PLANTILLA: in_array(NumeroQueBuscamos, array);
    //Devuelve un booleano especificando si el numeros que hemos metido como parametro se ha encontrado dentro del array o no
    $numeros = [20, 20, 10 ,10, 30, 10, 40];
    if (in_array(10, $numeros)){
        echo "El numero sa encontrado <br>";
    }else{
        echo "No esta<br>";
    }

echo "<br>";

    //ARRAY_SEARCH
    //PLANTILLA: array_serch(NumeroQueBuscamos, array);
    //Devuelve la posicion del numero encontrado dentro del array. Si se repite el numero, devolvera la primera vez que se encuentra
    $posicion = array_search(10, $numeros);
    echo $posicion;

echo "<br>";
echo "<br>";

    //ARRAY_SLICE
    //PLANTILLA: array_slice(array, DondeEmpiezo, CuantosCojo(hacia la derecha));
    //Devuelve un array tomando como referencia el array pasado como parametro empezando en la posicion "DondeEmpiezo" y añado "CuantosCojo" elementos del array original
    $trozo = array_slice($numeros, 1, 4);
    print_r($trozo);

echo "<br>";

    //ARRAY_UNIQUE
    //PLANTILLA: array_unique(array);
    $patata = array_unique($numeros);
    print_r($patata);

echo "<br>";
echo "<br>";

    //EXPLOTE
    //PLANTILLA: explote(separador, cadena);
    //Devuelve un array a partir de una cadena, usando como separador àra crear cada elementos del array el pasado como parametro
    $palabras = explode(",", "una, polla, me, sacan, sangre, durante, 10min");
    print_r($palabras);
echo "<br>";
    //IMPLODE
    //PLANTILLA: implode(separador, cadena);
    //Devuelve una cadena a partir de los elementos del array separados por el separador
    $cadena = implode("," || "una, polla, me, sacan, sangre, durante, 10min");
    print_r($cadena);

?>