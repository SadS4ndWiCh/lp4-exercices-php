<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    echoln(strtoupper("Ads é mais legal"));

    $text = "Gosto de cachorros mas não gosto tanto de gatos";
    $isTextIncludes = strpos($text, "não gosto");

    echoln("Texto: " . $text);
    if ($isTextIncludes) {
        echoln("Ele não inclue o 'não gosto'");
    } else {
        echoln("Ele inclui o 'não gosto'");
    }

    echoln(strtolower("Algoritmo é um conjunto de instruções lógicas para resolver um problema"));

    $textDc = "Os heróis da DC são melhores que os heróis da Marvel";
    echoln(str_replace("são melhores", "não são melhores", $textDc));