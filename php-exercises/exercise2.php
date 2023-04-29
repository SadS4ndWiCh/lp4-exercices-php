<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function convertDolarToReal(float $dolar, float $currentDolarQuotation) {
        return $dolar * $currentDolarQuotation;
    }

    $currentDolarQuotation = 5.04;

    echoln("R$ " . convertDolarToReal(10, $currentDolarQuotation));
    echoln("R$ " . convertDolarToReal(240, $currentDolarQuotation));
    echoln("R$ " . convertDolarToReal(6, $currentDolarQuotation));
    echoln("R$ " . convertDolarToReal(2, $currentDolarQuotation));