<?php

echo "<p><strong>Soal Logika Looping 1-100 angka yg hanya bisa dibagi 3 diganti menjadi fizz, yang hanya bisa dibagi 5 diganti menjadi Buzz, yang bisa dibagi 3 dan 5 diganti menjadi fizzbuzz</strong></p>";
echo "jawaban:";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } else {
        echo $i."<br>";
    }
}