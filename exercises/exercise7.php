<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function retrieveProductClassification(int $productCode) {
        if ($productCode == 1) return "Alimento não-perecível";
        else if ($productCode == 2 || $productCode == 3) return "Alimento perecível";
        else if ($productCode == 4 || $productCode == 5 || $productCode == 6) return "Vestuário";
        else if ($productCode == 7 || $productCode == 8 || $productCode == 9) return "Limpeza";
        else if ($productCode == 10) return "Utensílios domésticos";
        else if ($productCode == 11 || $productCode == 12) return "Eletrônicos";

        return "Código inválido";
    }

    echoln(retrieveProductClassification(1));
    echoln(retrieveProductClassification(3));
    echoln(retrieveProductClassification(5));
    echoln(retrieveProductClassification(7));
    echoln(retrieveProductClassification(9));
    echoln(retrieveProductClassification(10));
    echoln(retrieveProductClassification(12));
    echoln(retrieveProductClassification(11));