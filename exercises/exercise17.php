<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function realPow(float $a, int $b) {
        $result = 1;

        while ($b > 0) {
            $result *= $a;
            $b--;
        }

        return $result;
    }

    echoln(realPow(2, 4));
    echoln(realPow(2.5, 6));