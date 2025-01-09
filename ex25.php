<?php
// Tính tổng tất cả “ước số chẵn” của số nguyên dương n.
function sumDivisorSolution2($m) {
    $sum = 0;
    for($i = 1; $i <= $m; $i++) {
        if($m % $i ===0 && $i % 2 ===0) {
            $sum += $i;
        }
    }
    return $sum;
}

$m = 36;
echo "<pre>";
print_r(sumDivisorSolution2($m));
echo "</pre>";