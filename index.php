<?php
require_once 'Ejercicio1/ejercicio1.php';
$resultadoUnoSemaforo = semaforo_a("rojo");
$resultadoDosSemaforo = semaforo_b("amarillo");
$resultadoTresSemaforo = semaforo_c("verde");

require_once 'Ejercicio2/ejercicio2.php';
$resultadoUnoBinomio = binomioCuadradoPerfecto_a(2, 5);
$resultadoDosBinomio = binomioCuadradoPerfecto_b(2, 5);

require_once 'Ejercicio3/ejercicio3.php';
$resultadoConcatenado = concatenar("te amo", "rdido un perro");

require_once 'Ejercicio4/ejercicio4.php';
$numeroOriginal = 5;
$numero = $numeroOriginal;
incrementar($numero);

require_once 'Ejercicio5/ejercicio5.php';
$array = [4, 5, 1, 2];
$resultadoUnoSumatoria = sumatoria_a($array);
$resultadoDosSumatoria = sumatoria_b($array);
$resultadoTresSumatoria = sumatoria_c($array);

require_once 'Ejercicio6/ejercicio6.php';
$persona = new Saludar("Jimena", "Gomez");
$horario = 14;
$saludoFormal = $persona->saludoFormal($horario);
$saludoInformal = $persona->saludoInformal($horario);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guía Programación Web II</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body class="m-5">

    <h1 class="text-center mb-4">Jimena Rocío Gomez Wusinowski</h1>

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
                <li>a) Resultado con "rojo": <strong><?= $resultadoUnoSemaforo ?></strong></li>
                <li>b) Resultado con "amarillo": <strong><?= $resultadoDosSemaforo ?></strong></li>
                <li>c) Resultado con "verde": <strong><?= $resultadoTresSemaforo ?></strong></li>
            </ul>
        </div>
    </div>

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
                <li>a) Resultado con 2 y 5: <strong><?= $resultadoUnoBinomio ?></strong></li>
                <li>b) Resultado con 2 y 5: <strong><?= $resultadoDosBinomio ?></strong></li>
            </ul>
        </div>
    </div>

    <div class="col-md-12 mb-5">
        <h2 class="text-center mb-3">Ejercicio 3</h2>
        <p>
            Cree una función concatenar($texto1, $texto2) que reciba dos textos
            como parámetro y devuelva ambos textos concatenados como uno solo.
        </p>

        <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
            <p class="m-0">Te amo + rdido un perro: <strong><?= $resultadoConcatenado ?></strong></p>
        </div>
    </div>

    <div class="col-md-12 mb-5">
        <h2 class="text-center mb-3">Ejercicio 4</h2>
        <p>
            Cree una función llamada incrementar, que reciba una variable y sin
            devolver nada como retorno de la función, el valor del parámetro haya
            sido incrementado en 1 (Ver pasaje de parámetros por referencia)
        </p>

        <div class="col-md-12 bg-secondary text-white rounded-2 p-2">
            <ul class="m-0">
                <li>Valor original: <strong><?= $numeroOriginal ?></strong></li>
                <li>Valor incrementado: <strong><?= $numero ?></strong></li>
            </ul>
        </div>
    </div>

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
                <li>For: <strong><?= $resultadoUnoSumatoria ?></strong></li>
                <li>For each: <strong><?= $resultadoDosSumatoria ?></strong></li>
                <li>While: <strong><?= $resultadoTresSumatoria ?></strong></li>
            </ul>
        </div>
    </div>

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
            <p>Horario : <?= $horario ?> hs</p>
            <ul class="m-0">
                <li>Saludo formal: <strong><?= $saludoFormal ?></strong></li>
                <li>Saludo informal: <strong><?= $saludoInformal ?></strong></li>
            </ul>
        </div>
    </div>

</body>
</html>