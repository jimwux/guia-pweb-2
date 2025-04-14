<?php

//  Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
//  “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
//  “avance” o “estado desconocido” ante un caso no esperado.
//  a) función semaforo_a($color): Resuelva la solución utilizando if else
//  b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
//  c) función semaforo_c($color): Resuelva la solución utilizando switch


function semaforo_a ($color){

    $estado = "estado desconocido";

    if($color == "rojo"){
        $estado = "frene";
    } else if ($color == "amarillo"){
        $estado = "precaución";
    } else if ($color == "verde"){
        $estado = "avance";
    }

    return $estado;
}

function semaforo_b ($color){
    return $color == "rojo" ? "frene" :
        ($color == "amarillo" ? "precaución" :
        ($color == "verde" ? "avance" : "estado desconocido"));
}

function semaforo_c ($color){
    switch($color){
        case "rojo":
            return "frene";
            break;
        case "amarillo":
            return "precaución";
            break;
        case "verde":
            return "avance";
            break;
        default: return "estado desconocido";
    }
}