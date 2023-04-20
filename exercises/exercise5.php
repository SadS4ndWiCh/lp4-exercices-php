<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function applyDiscountInProduct(float $productPrice) {
        return $productPrice - $productPrice * 0.36;
    }

    echoln(applyDiscountInProduct(1235.32));
    echoln(applyDiscountInProduct(4652.32));
    echoln(applyDiscountInProduct(12.32));
    echoln(applyDiscountInProduct(75.32));