<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function convertFahrenheitToCelsius(float $fahrenheit) {
        return ($fahrenheit - 32.0) * (5.0 / 9.0);
    }

    echoln(convertFahrenheitToCelsius(32) . "ºC");
    echoln(convertFahrenheitToCelsius(44) . "ºC");
    echoln(convertFahrenheitToCelsius(63) . "ºC");
    echoln(convertFahrenheitToCelsius(82) . "ºC");
    echoln(convertFahrenheitToCelsius(91) . "ºC");
    echoln(convertFahrenheitToCelsius(102) . "ºC");
    echoln(convertFahrenheitToCelsius(145) . "ºC");