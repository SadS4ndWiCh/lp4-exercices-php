<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function isGreaterThan(float $a, float $b) {
        if ($a > $b) return 1;

        return -1;
    }

    echoln(isGreaterThan(2, 4));
    echoln(isGreaterThan(3, 4));
    echoln(isGreaterThan(4, 4));
    echoln(isGreaterThan(5, 4));
    echoln(isGreaterThan(6, 4));
    echoln(isGreaterThan(7, 4));