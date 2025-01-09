<?php
// Liệt kê tất cả “ước số lẻ” của số nguyên dương n.
function sumDivisorArray($n) {
    $divisor = [];
    for($i = 1; $i <= $n; $i++) {
        if($n % $i === 0 && $i % 2 === 0) {
            $divisor[] = $i;
        }
    }
    return $divisor;
}
$n = 36;
echo "<pre>";
print_r(sumDivisorArray($n));
echo "</pre>";