<?php
// Cho số nguyên dương n. Kiểm tra số dương n có phải là số hoàn thiện hay không?
function isPerfectNumber($n)
{
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}

$n = 28;
if (isPerfectNumber($n)) {
    echo "$n la so hoan thien";
} else {
    echo "$n khong la so hoan thien";
}
echo "<br/>";

//solution2  - dùng ước đối xứng
function isPerfectNumberOptimized($m)
{
    if ($m <= 1) return false;

    $sum = 1;
    for ($i = 2; $i <= sqrt($m); $i++) {
        if ($m % $i == 0) {
            $sum += $i;
            if ($i != $m / $i) {// nếu i la uoc cua m thì m/i cung là uoc cua m điều kiện này để khong cong hai số giống nhau đến 2 lần vd: 36/6 = 6;
                $sum += $m / $i;
            }
        }
    }
    return $sum == $m;
}

$m = 28;
if(isPerfectNumberOptimized($m)) {
    echo "$m la so hoan thien";
} else {
    echo "$m khong la so hoan thien";
}
echo "<br/>";

//solution3
function isPerfectNumberWithArrayFunctions($k) {
    if($k <= 1) return false;
    $divisors = array_filter(range(1, $k - 1), function($i) use ($k) {
        return $k % $i == 0;
    });
    $sum = array_reduce($divisors, function($carry, $item) {
        return $carry + $item;
    },0);
    return $sum == $k;
}
$k = 28;
if(isPerfectNumberWithArrayFunctions($k)) {
    echo "$k la so hoan thien";
} else {
    echo "$k khong la so hoan thien";
}
