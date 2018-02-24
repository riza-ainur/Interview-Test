<?php

function sortingArray($arr) {
    $counting = count($arr) - 1;
    for ($i = 0; $i < $counting; $i++) {
        for ($j = 0; $j < $counting - $i; $j++) {
            $k = $j + 1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }

    return $arr;
}

$arr = [1,3,2,8,10,5,0];

echo "sebelum di sorting";
print_r($arr);

$result = sortingArray($arr);
echo "setelah sorting menggunakan bubbleSort";
print_r($result);