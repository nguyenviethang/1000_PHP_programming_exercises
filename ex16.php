<?php
//Tính S(n) = 𝑥 + 𝑥^2/(1+2) + x^3/(1+2+3) + ... + x^n/(1+2+3+...+n)
function sumFraction($x, $n){
    $sum = 0;
    $denominator = 0;
    for($i = 1; $i <= $n; $i++){
        $denominator += $i;
        $sum += pow($x, $i)/ $denominator;
    }
    return $sum;
}
$x = 2;
$n = 5;
echo "S la: " . sumFraction($x, $n);
echo "<br/>";

//solution-- sự dụng lập trình hàm
function calculateSumFunctional($y, $m) {
    $terms = range(1, $m);
    $sum = array_reduce($terms, function($acc, $i) use ($y){
        $denominator = array_sum(range(1, $i));
        return $acc + pow($y, $i) / $denominator;
    }, 0);
    return $sum;
}
$y = 2;
$m = 5;
echo "S la: " . calculateSumFunctional($y, $m);
echo "<br/>";

//solution sử dụng array_sum
function calculateSumLoop($z, $k) {
    $sum = 0;
    for ($i = 1; $i <= $k; $i++) {
        $denominator = array_sum(range(1, $i)); // Tính tổng 1 + 2 + ... + i
        $sum += pow($z, $i) / $denominator;
    }
    return $sum;
}

// Ví dụ sử dụng
$z = 2;
$k = 5;
echo "S($k) = " . calculateSumLoop($z, $k); 