<?php
include '../header.php';
require_once '../Ejercicio6/ejercicio6.php';
$persona = new Saludar("Jimena", "Gomez");
$horario = 14;
$saludoFormal = $persona->saludoFormal($horario);
$saludoInformal = $persona->saludoInformal($horario);
?>

<div class="col-md-12 mb-5">
    <h2 class="text-center mb-3">Ejercicio 6</h2>
    <p>
        Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
        persona. <br>
        Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
        concatenado al nombre un prefijo dependiendo del horario: <br>
        05hs a 13hs “Buenos días” <br>
        13hs a 21hs “Buenas tardes” <br>
        21hs a 05hs “Buenas noches” <br>
        Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
        Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
        sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
        perteneciente al horario.  <br>
        Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
        “¡Hola Ezequiel! Que tengas un buen día”

    </p>

    <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
        <p>Horario : <?php echo $horario ?> hs</p>
        <ul class="m-0">
            <li>Saludo formal: <strong><?php echo $saludoFormal ?></strong></li>
            <li>Saludo informal: <strong><?php echo $saludoInformal ?></strong></li>
        </ul>
    </div>
</div>

<?php include '../footer.php'; ?>