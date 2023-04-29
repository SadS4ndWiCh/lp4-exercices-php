<?php
	function echoln(string $message) {
		echo $message . "<br/>";
	}

	function fibonacciN(int $n) {
		$a = 1;
		$b = 1;

		for ($i = 2; $i <= $n; $i++) {
			$temp = $a;
			$a = $b;
			$b = $temp + $b;
		}

		return $a;
	}

	echoln(fibonacciN(1));
	echoln(fibonacciN(2));
	echoln(fibonacciN(3));
	echoln(fibonacciN(4));
	echoln(fibonacciN(5));
	echoln(fibonacciN(6));
	echoln(fibonacciN(7));
	echoln(fibonacciN(8));