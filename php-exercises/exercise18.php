<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function isPrime(int $n) {
        if ($n < 2) return false;
        if ($n == 2 || $n == 3) return true;
        if ($n % 2 == 0) return false;

        $_sqrt = (int) sqrt($n);
        $dx = 4;

        for ($i = 5; $i <= $_sqrt; $i += $dx) {
            if ($n % $i == 0) return false;

            $dx = - ($dx - 6);
        }

        return true;
    }

    for ($i = 2; $i < 10000; $i++) {
        if (isPrime($i)) echoln($i . " é primo.");
    }