<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function distanceOf(float $x1, float $y1, float $x2, float $y2) {
        return sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);
    }

    echoln(distanceOf(0,0,2,2));
    echoln(distanceOf(0,0,4,4));
    echoln(distanceOf(0,0,2,4));
    echoln(distanceOf(-4,-4,10,14));