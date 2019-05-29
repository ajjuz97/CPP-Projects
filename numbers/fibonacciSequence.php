<?php

function fibonacciToNumber(int $number)
{

	$sequence = array();

	for ($num1 = 0, $num2 = 1; $num2 <= $number;) {
		array_push($sequence, $num2);
		$temp = $num1;
		$num1 = $num2;
		$num2 += $temp;
	}

	return $sequence;
}

function fibonacciToNth(int $number)
{

	$sequence = array();

	for ($num1 = 0, $num2 = 1, $i = 0; $i < $number; $i++) {
		array_push($sequence, $num2);
		$temp = $num1;
		$num1 = $num2;
		$num2 += $temp;
	}

	return $sequence;
}



do {

	echo ("\nEnter Choice\n");
	echo ("Menu: \n1.Enter Till Specific Number \n2.Enter Nth Number \n3.Exit\n");

	fscanf(STDIN, "%d", $choice);
	switch ($choice) {
		case 1:
			echo ("Enter Limit:");
			fscanf(STDIN, "%d", $num);
			$result = fibonacciToNumber($num);
			$seq = implode(" ", $result);
			echo ($seq);
			break;

		case 2:
			echo ("Enter Limit:");
			fscanf(STDIN, "%d", $num);
			$result = fibonacciToNth($num);
			$seq = implode(" ", $result);
			echo ($seq);
			break;

		case 3:
			break;

		default:
			echo ("Invalid Input");
	}
} while ($choice != 3);
