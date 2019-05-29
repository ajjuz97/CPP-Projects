<?php

function primeFactorize($num)
{
	if ($num > 1) {
		$divisor = 2;
		$primeFactors = array();

		while ($num > 1) {
			if ($num % $divisor == 0) {
				$num = $num / $divisor;
				array_push($primeFactors, $divisor);
			} else {
				$divisor = nextPrime($divisor);
			}
		}

		$primeFactors = implode(",", $primeFactors);

		return $primeFactors;
	}
	return "Not A Valid Input";
}

function nextPrime($num)
{
	for ($i = $num + 1;; $i++) {
		if (checkIfPrime($i)) {
			return $i;
		}
	}
}

function checkIfPrime($num)
{
	for ($i = 2; $i < $num; $i++) {
		if ($num % $i == 0) {
			return false;
		}
	}

	return true;
}
echo ("Enter number:");

fscanf(STDIN, "%d", $num);

$result = primeFactorize($num);

echo ($result);
