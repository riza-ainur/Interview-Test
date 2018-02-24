<?php

function solution(&$a, $k)
{
    for($i = 1; $i < $k; $i++)
    {
        array_push($a, array_shift($a));
    }
}

$inputArray = [3,8,9,7,6];

solution($inputArray, 3);
print_r($inputArray);

