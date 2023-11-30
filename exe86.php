<?php
function sumOfCubedNumbers($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $cube = $i * $i * $i;
        $sum += $cube;
    }
    return $sum;
}

$n = readline("nhap n: ");
$result = sumOfCubedNumbers($n);
echo "tong day so lap phuong la: {$result}";