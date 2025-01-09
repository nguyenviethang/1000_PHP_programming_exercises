<?php
//Đếm số lượng “ươc số chẵn” của số nguyên dương n. 

function countDivisors($n) {
    $count = 0;
    for($i = 1; $i <= $n; $i++) {
        if($n % $i ===0 && $i % 2 === 0) {
            $count++;
        }
    }
    return $count;
}
$n = 36;
echo "<pre>";
print_r(countDivisors($n));
echo "<pre/>";
