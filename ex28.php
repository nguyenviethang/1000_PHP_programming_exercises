<?php
//Cho số nguyên dương n. Tính tổng các ước số nhỏ hơn chính nó
function sumDivisor($n) {
    $sum = 0;
    for($i = 1; $i < $n; $i++) {
        if($n % $i ===0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 36;
echo "<pre>";
print_r(sumDivisor($n));
echo "<pre/>";