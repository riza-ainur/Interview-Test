<?php

function sequence($number)
{
    for ($i = 1; $i <= $number; $i++) {
        $first = $i + $number;
        $two = $i + 8;

        echo "<br>";
        echo $i." ".$first." ".$two;
    }
}

sequence(4);

 ?>