<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function getIMC(float $height, float $weight) {
        return $weight / $height ** 2;
    }

    echoln(getIMC(1.66, 55.27));
    echoln(getIMC(1.98, 102.27));
    echoln(getIMC(1.44, 49.27));
    echoln(getIMC(1.55, 57.27));