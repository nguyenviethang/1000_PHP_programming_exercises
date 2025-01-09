<?php
//Tính S(n) = 1 + 2 + 3 + ... + n.

// function total($n) {
//     return ($n * ($n +1))/2;
// }
// $n = 10;
// $result = total($n);
// echo "total $n is: $result";

//method2

function sum($m) {
    $sum = 0;
    for ($i = 0; $i <= $m; $i++) {
        $sum += $i;
    }
    return $sum;
}
$m = 10;
$result = sum($m);
echo "sum  of $m is: $result";