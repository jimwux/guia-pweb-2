<?php

//  Cree una clase llamada Saludar, la misma tendrá un constructor que reciba
//  nombre, apellido de una persona.
//  Dicha clase debe implementar el metodo saludoFormal( $horario ) el cual debe responder
//  concatenado al nombre un prefijo dependiendo del horario:
//  05hs a 13hs “Buenos días”
//  13hs a 21hs “Buenas tardes”
//  21hs a 05hs “Buenas noches”
//  Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
//  Dicha clase debe implementar también el metodo saludoInformal( $horario ) el cual
//  debe responder sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar
//  “que tengas un ...” saludo perteneciente al horario.
//  Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
//  “¡Hola Ezequiel! Que tengas un buen día”

class Saludar {
    private $nombre;
    private $apellido;

    function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    function saludoFormal($horario) {
        $saludoFormal = "";

        if ($horario >= 5 && $horario < 13) {
            $saludoFormal = "Buenos días " . $this->nombre . " " . $this->apellido;
        } elseif ($horario >= 13 && $horario < 21) {
            $saludoFormal = "Buenas tardes " . $this->nombre . " " . $this->apellido;
        } elseif ($horario >= 21 || $horario < 5) {
            $saludoFormal = "Buenas noches " . $this->nombre . " " . $this->apellido;
        }

        return $saludoFormal;
    }

    function saludoInformal($horario) {
        $saludoInformal = "";

        if ($horario >= 5 && $horario < 13) {
            $saludoInformal = "¡Hola " . $this->nombre . "! Que tengas un buen día";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludoInformal = "¡Hola " . $this->nombre . "! Que tengas una buena tarde";
        } elseif ($horario >= 21 || $horario < 5) {
            $saludoInformal = "¡Hola " . $this->nombre . "! Que tengas una buena noche";
        }

        return $saludoInformal;
    }
}