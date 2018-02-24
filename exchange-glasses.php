<?php

function original($aGlass, $bGlass) {
    echo "<br>";
    echo "before:";
    echo "<br>";
    print_r("A glass is:  <strong>". $aGlass ."</strong>");
    echo "<br>";
    print_r("B glass is:  <strong>". $bGlass ."</strong>");
}

function changes($aGlass, $bGlass) {
    $cGlass = $aGlass;
    $aGlass = $bGlass;
    $bGlass = $cGlass;

    echo "<br>";
    echo "after:";
    echo "<br>";
    print_r("A glass is:  <strong>". $aGlass ."</strong>");
    echo "<br>";
    print_r("B glass is:  <strong>". $bGlass ."</strong>");
}
original("10", "20");
echo "<br>";
changes("10", "20");