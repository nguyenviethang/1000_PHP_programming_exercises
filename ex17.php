<?php

//Tính S(n) = 𝑥 + 𝑥^2/2! + X^3/3! +... + X^n/n!

function sumFraction($x, $n)
{
    $sum = 0;
    $denominator = 1;
    for ($i = 1; $i <= $n; $i++) {
        $denominator *= $i;
        $sum += pow($x, $i) / $denominator;
    }
    return $sum;
}
$x = 2;
$n = 5;
echo "S la: " . sumFraction($x, $n);
// solution2- sự dụng các hàm có sẵn trong array

function factorial($m)
{
    if ($m == 0 || $m == 1) {
        return 1;
    } else {
        return array_product(range(1, $m));
    }
}
function term($y, $i)
{
    return pow($y, $i) / factorial($i);
}

function calculateS($y, $m)
{
    $range = range(1, $m);

    $terms = array_map(function ($i) use ($y) {
        return term($y, $i);
    }, $range);

    return array_reduce($terms, function($carry, $item){
        return $carry + $item;
    }, 0);
}
