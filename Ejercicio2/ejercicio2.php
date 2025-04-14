<?php

//  Cree una función llamada binomioCuadradoPerfecto que realice la\ecuación de dicha
//  problemática: recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2
//  a) función binomioCuadradoPerfecto_a($a, $b)\
//  Resuelva la solución utilizando la función de potencia
//  b) función binomioCuadradoPerfecto_b($a, $b):
//  Resuelva la solución utilizando la fórmula desarrollada del binomio: a2 + 2*a*b + b

function binomioCuadradoPerfecto_a ($a, $b) {
    return pow(($a + $b), 2);
}
function binomioCuadradoPerfecto_b ($a, $b) {
    return pow($a, 2) + ( 2 * $a * $b ) + pow($b, 2);
}