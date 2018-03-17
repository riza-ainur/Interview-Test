<?php

function simpleArraySum($n, $ar) {
    $n = explode(' ', fgets($ar));
    array_walk($n, function (&$value) {
        $value = intval($value);
    });

    echo array_sum($n);
}

$__fp = fopen("php://stdin", "r");
fscanf($__fp, "%d\n", $n);
$result = simpleArraySum($n, $__fp);
fclose($__fp);