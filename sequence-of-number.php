<?php

function sequence($number)
{
    for ($i = 1; $i <= $number; $i++) {
        $first = $i + $number;
        $two = $i + 15;

        echo "<br>";
        echo $i." ".$first." ".$two;
    }
}

sequence(10);

 ?>