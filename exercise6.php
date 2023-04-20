<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function greatestNumberOf(int $n1, int $n2, int $n3) {
        if ($n1 > $n2 && $n1 > $n3) return $n1;
        else if ($n2 > $n1 && $n2 > $n3) return $n2;

        return $n3;
    }

    echoln(greatestNumberOf(1, 2, 3));
    echoln(greatestNumberOf(4, 2, 2));
    echoln(greatestNumberOf(12, 14, 222));
?>