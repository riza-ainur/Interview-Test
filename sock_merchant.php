<?php

function sockMerchant($n, $ar) 
{
	$n = explode(' ', fgets($ar));
	// print_r($n);
	sort($n);

	$counter = 0;
	for ($i=0; $i < count($n) - 1; $i++) { 
		print_r($n[$i]);
		if ($n[$i] === $n[$i+1]) {
			$counter++;
			$i++;
		}
	}

	print_r($counter);
}

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);
$result = sockMerchant($n, $stdin);
fclose($stdin);

?>