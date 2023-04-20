<?php
    function echoln(string $message) {
        echo $message . "<br/>";
    }

    function isStudentApproved(float $np1, float $np2, float $nt1, float $nt2) {
        $averageExamGrade = ($np1 + $np2) / 2;
        $averageWorkGrade = ($nt1 + $nt2) / 2;

        $finalAverage = $averageExamGrade * 0.8 + $averageWorkGrade * 0.2;

        if ($finalAverage >= 5) return 1;
        return 0;
    }

    echoln(isStudentApproved(5,5,5,5));
    echoln(isStudentApproved(9,8.6,10,9.9));
    echoln(isStudentApproved(7,4,5.5,0));
