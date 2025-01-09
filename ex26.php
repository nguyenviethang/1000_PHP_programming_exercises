<?php
//Tính tích tất cả “ước số lẻ” của số nguyên dương n.
function multiplicationDivisor($n) {
    $mul = 1;
    for($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0 && $i % 2 !== 0) {
            $mul *= $i;
        }
    }
    return $mul;
}
$n = 9;
echo "<pre>";
print_r(multiplicationDivisor($n));
echo "<pre/>";

//solution2

function findOddDivisors($m) {
    $divisors = [];
    for($i = 1; $i <= $m; $i++) {
        if($m % $i == 0 && $i % 2 != 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}
function productOfArray($arr) {
    $product = 1;
    foreach($arr as $value) {
        $product *= $value;

    }
    return $product;
}
$n = 9;
$oddDivisors = findOddDivisors($n);
echo "Tich cac uoc so le cua {$n} la: " . productOfArray($oddDivisors);