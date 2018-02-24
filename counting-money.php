<?php

$totalMoney = 1988283;
$shards = [
    100000,
    50000,
    20000,
    5000,
    100,
    50
];
foreach ($shards as $shard) {
    echo "Jumlah uang " . $shard . " : " . floor($totalMoney / $shard) . "<br>";
    $totalMoney %= $shard;
}
