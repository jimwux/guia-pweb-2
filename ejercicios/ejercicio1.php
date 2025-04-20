<?php
include '../header.php';
require_once '../Ejercicio1/ejercicio1.php';
$resultadoUnoSemaforo = semaforo_a("rojo");
$resultadoDosSemaforo = semaforo_b("amarillo");
$resultadoTresSemaforo = semaforo_c("verde");
?>

<div class="col-md-12 mb-5">
        <h2 class="text-center mb-3">Ejercicio 1</h2>
        <p>
            Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo” “amarillo”,”verde”).
            Dicha función devolverá el estado que corresponde: “frene”, “precaución”, “avance” o “estado desconocido”
            ante un caso no esperado. <br>
            a) función semaforo_a($color): Resuelva la solución utilizando if else <br>
            b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: ) <br>
            c) función semaforo_c($color): Resuelva la solución utilizando switch
        </p>

        <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
            <ul class="m-0">
                <li>a) Resultado con "rojo": <strong><?php echo $resultadoUnoSemaforo ?></strong></li>
                <li>b) Resultado con "amarillo": <strong><?php echo $resultadoDosSemaforo ?></strong></li>
                <li>c) Resultado con "verde": <strong><?php echo $resultadoTresSemaforo ?></strong></li>
            </ul>
        </div>
</div>

<?php include '../footer.php'; ?>
