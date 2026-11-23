<?php
/**
 * CREAR 3 CONSTANTES DONDE EL NOMBRE SEA EL TIPO DE IVA Y SU VALOR EL NUMERO POR EL QUE MULTIPLICAR EL PRECIO PARA QUE ME DE EL PVP
 * 
 * GENERAL => 1.21
 * REDUCIDO => 1.1
 * SUPER REDUCIDO => 1.04
 */

    define("GENERAL", 1.21);
    define("REDUCIDO", 1.1);
    define("SUPER_REDUCIDO", 1.04);
    function calcularPVP(int | float $precio, string $iva):float{
        
        return match($iva){
            "general" => $precio * GENERAL,
            "reducido" => $precio * REDUCIDO,
            "super_reducido" => $precio * SUPER_REDUCIDO
        };
        
    }