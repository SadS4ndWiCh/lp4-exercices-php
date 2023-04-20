<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function isPalindrome(int $n) {
        $strN = (string) $n;
        $strLength = strlen($strN);

        for ($i = 0; $i < floor($strLength / 2); $i++) {
            if ($strN[$i] != $strN[$strLength - ($i + 1)]) return false;
        }

        return true;
    }

    $testNumbers = [101,202,1001,5005,5555,1242,1251,3253, 2332, 1, 10];

    foreach ($testNumbers as $n) {
        if (isPalindrome($n)) echoln($n . " é Palindromo");
        else echoln($n . " não é palindromo");
    }
