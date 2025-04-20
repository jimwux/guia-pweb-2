<?php
include '../header.php';
require_once '../Ejercicio5/ejercicio5.php';
$array = [4, 5, 1, 2];
$resultadoUnoSumatoria = sumatoria_a($array);
$resultadoDosSumatoria = sumatoria_b($array);
$resultadoTresSumatoria = sumatoria_c($array);
?>

<div class="col-md-12 mb-5">
    <h2 class="text-center mb-3">Ejercicio 5</h2>
    <p>
        Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
        valores. <br>
        a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for <br>
        b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each <br>
        c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
    </p>

    <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
        <p>Resultado de sumar 4, 5, 1 y 2: </p>
        <ul class="m-0">
            <li>For: <strong><?php echo $resultadoUnoSumatoria ?></strong></li>
            <li>For each: <strong><?php echo $resultadoDosSumatoria ?></strong></li>
            <li>While: <strong><?php echo $resultadoTresSumatoria ?></strong></li>
        </ul>
    </div>
</div>

<?php include '../footer.php'; ?>