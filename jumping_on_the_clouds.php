<?php 

function jumpingOnTheClouds($n, $array)
{
	$n = explode(' ', fgets($array));
	$count = 0;
	$i = 0;

	while (true) {
		if ($i + 2 < count($n) && $n[$i + 2] == 0) {
			$i += 2;
		} elseif ($i + 1 < count($n)) {
			$i++;
		} else {
			break;
		}

		$count++;
	}

	print_r($count);
}

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);
$result = jumpingOnTheClouds($n, $stdin);
fclose($stdin);

?>