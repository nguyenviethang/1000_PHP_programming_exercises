<?php
$a = 1.1;
$b = 2.4;
$c = 3.1;

$max = $a;
if ($max < $b) {
    $max = $b;
}
if ($max < $c) {
    $max = $c;
}
echo " so lon nhat la: " . $max;