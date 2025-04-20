<?php
include '../header.php';
require_once '../Ejercicio3/ejercicio3.php';
$resultadoConcatenado = concatenar("te amo", "rdido un perro");
?>

<div class="col-md-12 mb-5">
    <h2 class="text-center mb-3">Ejercicio 3</h2>
    <p>
        Cree una función concatenar($texto1, $texto2) que reciba dos textos
        como parámetro y devuelva ambos textos concatenados como uno solo.
    </p>

    <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
        <p class="m-0">Te amo + rdido un perro: <strong><?php echo $resultadoConcatenado ?></strong></p>
    </div>
</div>

<?php include '../footer.php'; ?>
