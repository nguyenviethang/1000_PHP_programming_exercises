<?php
//tinh S(n)=1 + 1/(1+2) + 1/(1+2+3)+...+1/(1+2+3+...+n).
function sum($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
function sumFactorial($n)
{
    $product = 0;
    for ($i = 1; $i <= $n; $i++) {
        $product += 1 / sum($i);
    }
    return $product;
}

$n = 5;
echo "S($n):" . sumFactorial($n);
echo "<br/>";
//solution2

function sumSeries($m)
{
    $sum = 0;
    for ($i = 1; $i <= $m; $i++) {
        $partialSum = ($i * ($i + 1)) / 2;
        $sum += 1 / $partialSum;
    }
    return $sum;
}
$m = 5;
echo "S($m) = " . sumSeries($m);
