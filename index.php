<?php
include_once "Function.php";

$numbers = [];
for ($i = 0; $i < 20; $i++) {
    array_push($numbers, rand(0,10));
}

foreach ($numbers as $item) {
    echo $item . " ";
}

$number = 5;
echo "<br>Số lần xuất hiện phần tử $number trong mảng là: " . countNumberOfOccurrences($numbers, $number) . ' lần.';
