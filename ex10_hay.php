<?php
//tinh T(x,n)= x^n
//solution1
function power($x, $n)
{
    return $x ** $n;
}
$x = 2;
$n = 3;
echo "T($x, $n): " . power($x, $n);
echo "<br/>";

//solution2
function powerSolution2($y, $m)
{
    return pow($y, $m);
}
$y = 2;
$m = 3;
echo "T($y, $m): " . powerSolution2($y, $m);
echo "<br/>";

//solution3
function powerSolution3($z, $k)
{
    $result = 1;
    for ($i = 0; $i <= $k; $i++) {
        $result *= $z;
    }
    return $result;
}

$z = 2;
$k = 3;
echo "T($z, $k): " . power($z, $k);
echo "<br/>";


