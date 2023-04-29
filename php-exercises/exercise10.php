<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function factorial(int $n) {
        $total = 1;

        while ($n > 0) {
            $total *= $n;
            $n--;
        }

        return $total;
    }

    echoln(factorial(0));
    echoln(factorial(1));
    echoln(factorial(2));
    echoln(factorial(3));
    echoln(factorial(4));