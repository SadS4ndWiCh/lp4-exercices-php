<?php
    require './funcoesCalculo.php';

    if (!empty($_GET['measure'])) {
        $measure = $_GET['measure'];
        $convertion = $_GET['measure-convert-to'];
        $result = "";

        if ($convertion == 'c-m') $result = centimetersToMeters($measure) . "m";
        else if ($convertion == 'm-c') $result =  metersToCentimeters($measure) . "cm";
        else if ($convertion == 'm-k') $result =  metersToKilometers($measure) . "km";
        else if ($convertion == 'k-m') $result =  kilemetersToMeters($measure) . "m";

        echo "Medida: " . $result;
    } else {
        echo "Medida vazia";
    }