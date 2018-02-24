<?php

function valueString($value) {
    $countValue = array_count_values($value);
    echo $countValue['ttt'];
    echo "<br>";

}

function valueArray($value) {
    $countValue = array_count_values($value);
    echo $countValue[8];
}

echo "<br>";
valueString(["aaa","ttt","www","ttt","yyy","tttt"]);
valueArray([1,3,2,3,7,8,9,7,3]);