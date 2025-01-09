<?php
//Tính tich tất cả “ước số” của số nguyên dương n

function sumDivisorArray($n) {
    $divisor = 1;
    for($i = 1; $i <= $n; $i++) {
        if($n % $i === 0) {
            $divisor *= $i;
        }
    }
    return $divisor;
}
$n = 9;
echo "<pre>";
print_r(sumDivisorArray($n));
echo "</pre>";