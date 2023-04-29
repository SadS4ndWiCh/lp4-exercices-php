<?php
    function sum(int $num1, int $num2) {
        return $num1 + $num2;
    };
    function sub(int $num1, int $num2) {
        return $num1 - $num2;
    };
    function mult(int $num1, int $num2) {
        return $num1 * $num2;
    };
    function div(int $num1, int $num2) {
        return $num1 / $num2;
    };

    function celciusToFahrenheit(float $celcius) {
        return ($celcius * 9/5) + 32;
    }
    function fahrenheitToCelcius(float $fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    function centimetersToMeters(float $centimeters) {
        return $centimeters / 100;
    }
    function metersToCentimeters(float $meters) {
        return $meters * 100;
    }
    function metersToKilometers(float $meters) {
        return $meters / 1000;
    }
    function kilemetersToMeters(float $kilometers) {
        return $kilometers * 1000;
    }