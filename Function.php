<?php
function countNumberOfOccurrences($array, $value)
{
    $count = 0;
    for ($j = 0; $j < count($array); $j++) {
        if ($array[$j] == $value) {
            $count++;
        }
    }
    return $count;
}