<?php
include '../header.php';
require_once '../Ejercicio2/ejercicio2.php';
$resultadoUnoBinomio = binomioCuadradoPerfecto_a(2, 5);
$resultadoDosBinomio = binomioCuadradoPerfecto_b(2, 5);
?>

<div class="col-md-12 mb-5">
        <h2 class="text-center mb-3">Ejercicio 2</h2>
        <p>
            Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
            recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2 <br>
            a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
            potencia <br>
            b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a2 + 2*a*b + b2
        </p>

        <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
            <ul class="m-0">
                <li>a) Resultado con 2 y 5: <strong><?php echo $resultadoUnoBinomio ?></strong></li>
                <li>b) Resultado con 2 y 5: <strong><?php echo $resultadoDosBinomio ?></strong></li>
            </ul>
        </div>
</div>

<?php include '../footer.php'; ?>