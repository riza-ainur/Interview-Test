<?php

function reverseWorld($string) {
    $result = '';
    $searchString = ['E'];
    $newString = ['3'];
    $replaceString = str_ireplace($searchString, $newString, $string);
    $count = strlen($replaceString);

    for ($i = 1; $i <= $count; $i++) {
        $result .= substr($replaceString, $count - $i, 1);
    }

    return $result;
}

echo reverseWorld('OKEZONE');
