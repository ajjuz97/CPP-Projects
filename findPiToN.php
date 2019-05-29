<?php

echo("Enter nth digit(Max: 13):");

fscanf(STDIN,"%f",$number);

if($number > 13)
{
	echo("Number Must Be Less Than Or Equal To 13");
}
else
{
	$powerOfTen = pow(10, $number);
	$result = floor( pi()* $powerOfTen) / $powerOfTen ;
	echo($result);
}
