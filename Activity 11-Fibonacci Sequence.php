<?php
$first = 0;
$second = 1;
$counter = 0;

while ($counter < 10) {
    echo $first . " ";
    $next = $first + $second;
    $first = $second;
    $second = $next;
    $counter++;
}
