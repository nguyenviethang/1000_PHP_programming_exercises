<?php
//Tính tổng tất cả “ước số” của số nguyên dương n
function sumDivisorArray($n) {
    $divisor = [];
    for($i = 1; $i <= $n; $i++) {
        if($n % $i === 0) {
            $divisor[] = $i;
        }
    }
    return array_sum($divisor);
}
$n = 36;
echo "<pre>";
print_r(sumDivisorArray($n));
echo "</pre>";

//solution2
function sumDivisorSolution2($m) {
    $sum = 0;
    for($i = 1; $i <= $m; $i++) {
        if($m % $i ===0) {
            $sum += $i;
        }
    }
    return $sum;
}

$m = 36;
echo "<pre>";
print_r(sumDivisorSolution2($m));
echo "</pre>";

//solution3- phức tạp--> khó bảo trì--> không nên dùng cách này
function sumDivisorSolution3($k) {
    $sum = 0;
    for ($i = 1; $i * $i <= $k; $i++){
        if($k % $i === 0) {
            $sum += $i;
            if($i != $k / $i) {
                $sum += $k / $i;
            }
        }
    }
    return $sum;
}
$k = 36;
echo "<pre>";
print_r(sumDivisorSolution3($k));
echo "</pre>";