<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function wageReadjustment(float $salary, float $percentage) {
        return $salary + (($salary * $percentage) / 100);
    }

    echoln(wageReadjustment(1000, 50));
    echoln(wageReadjustment(2000, 100));
    echoln(wageReadjustment(1922, 2));