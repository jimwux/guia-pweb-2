<?php

//  Cree una función sumatoria que reciba un vector cómo parámetro,
//  y devuelva la suma de todos sus valores.
//  a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
//  b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
//  c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while

function sumatoria_a ($array) {
    $sumatoria = 0;
    for ($i=0; $i < count($array); $i++) {
        $sumatoria += $array[$i];
    }
    return $sumatoria;
}

function sumatoria_b ($array) {
    $sumatoria = 0;
    foreach ($array as $valorActual) {
        $sumatoria += $valorActual;
    }
    return $sumatoria;
}

function sumatoria_c ($array) {
    $sumatoria = 0;
    $i = 0;
    while ($i < count($array)) {
        $sumatoria += $array[$i];
        $i++;
    }
    return $sumatoria;
}