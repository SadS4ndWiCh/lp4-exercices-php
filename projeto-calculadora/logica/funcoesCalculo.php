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