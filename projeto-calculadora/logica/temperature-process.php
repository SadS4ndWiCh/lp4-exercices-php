<?php
    require('./funcoesCalculo.php');

    if (!empty($_POST['temperature'])) {
        $temperature = $_POST['temperature'];
        $convertion = $_POST['temperature-convert-to'];
        $result = "";

        if ($convertion == 'c-f') $result = celciusToFahrenheit($temperature) . "ºF";
        else if ($convertion == 'f-c') $result = fahrenheitToCelcius($temperature) . "ºC";

        echo "Temperatura: " . $result;
    } else {
        echo "Temperatura vazia";
    }