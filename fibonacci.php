<?php

function fibonnaciNumber($input) {
  $lastNumber = 0;
  $newNumber = 1;
  $string = "$lastNumber $newNumber";

  for ($i = 0; $i < $input - 2; $i++) {
    $results = $newNumber + $lastNumber;
    $string = $string." $results";
    $lastNumber = $newNumber;
    $newNumber = $results;
  }

  return $string;
}

echo fibonnaciNumber(8);