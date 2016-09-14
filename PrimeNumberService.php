<?php

/**
 * 
 * Prime number service, provide a web service call to generate a set of prime number based on the service call.
 * Returns JSON with all the prime number per request
 */
 
$count = 0;
$number = 2;
//$primeFrom = $_GET['from'];
//$primeTo   = $_GET['to'];
$numberOfPrimeExpected = $_GET['count'];
echo "{\"Prime\":[";
while ( $count < $numberOfPrimeExpected ) {
	$divisionCount = 0;
	for($i = 1; $i <= $number; $i ++) {
		if (($number % $i) == 0) {
			$divisionCount ++;
		}
	}
	if ($divisionCount < 3) {
		//echo ($numberOfPrimeExpected - 1) . " $count --<br />";
		if(($numberOfPrimeExpected - 1) == $count){
			echo $number;
		}else{
			echo $number . ",";
		}
		$count = $count + 1;
	}
	$number = $number + 1;
}
echo "]}";
?>