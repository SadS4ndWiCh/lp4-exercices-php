<?php
    require './funcoesCalculo.php';


    if (!empty($_GET['num1']) && !empty($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];
        $resultado = 0;

        if ($operation == "+") $resultado = sum($num1, $num2);
        else if ($operation == "-") $resultado = sub($num1, $num2);
        else if ($operation == "*") $resultado = mult($num1, $num2);
        else if ($operation == "/") $resultado = div($num1, $num2);

        echo "Resultado: " . $num1 . ' ' . $operation . ' ' . $num2 . ' = ' . $resultado;
    } else {
        echo "Número 1 ou 2 está vazio.";
    }

