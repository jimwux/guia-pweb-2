<?php
include '../header.php';
require_once '../Ejercicio4/ejercicio4.php';
$numeroOriginal = 5;
$numero = $numeroOriginal;
incrementar($numero);
?>

<div class="col-md-12 mb-5">
    <h2 class="text-center mb-3">Ejercicio 4</h2>
    <p>
        Cree una función llamada incrementar, que reciba una variable y sin
        devolver nada como retorno de la función, el valor del parámetro haya
        sido incrementado en 1 (Ver pasaje de parámetros por referencia)
    </p>

    <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
        <ul class="m-0">
            <li>Valor original: <strong><?php echo $numeroOriginal ?></strong></li>
            <li>Valor incrementado: <strong><?php echo $numero ?></strong></li>
        </ul>
    </div>
</div>

<?php include '../footer.php'; ?>
