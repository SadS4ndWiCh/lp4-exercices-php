<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function calcHypot(float $cat1, float $cat2) {
        return $cat1 ** 2 + $cat2 ** 2;
    }

    echoln(calcHypot(25.4, 22.1));
    echoln(calcHypot(15.4, 2.1));
    echoln(calcHypot(66, 5.5));
    echoln(calcHypot(1, 5));