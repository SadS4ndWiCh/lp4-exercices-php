<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    for ($i = 1; $i <= 1000; $i++) {
        if ($i % 2 == 0) echoln($i . " é par");
    }