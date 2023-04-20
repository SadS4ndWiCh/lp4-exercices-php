<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function averageFuelOfDistance(float $totalDistance, float $totalFuel) {
        return $totalDistance / $totalFuel;
    }

    echoln(averageFuelOfDistance(132.6, 13.26));