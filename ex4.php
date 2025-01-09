<?php

//Tính S(n) =1/2 + 1/4 + … + 1/2n


//solution1: su dung vong lap for
function sumUsingForLoop($n)
{
    $sum = 0.0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += 1 / (2 * $i);
    }
    return $sum;
}
$n = 3;
echo "Sum: " . sumUsingForLoop($n);
echo "<br/>";


//solution 2: su dung vong lap while
function sumUsingWhile($m)
{
    $sum = 0.0;
    $i = 1;
    while ($i <= $m) {
        $sum += 1 / (2 * $i);
        $i++;
    }
    return $sum;
}
$m = 3;
echo "Sum: " . sumUsingWhile($m);
echo "<br/>";

//solution 3: su dung de quy recursion

function sumUsingRecursion($k)
{
    if ($k == 1) {
        return 1 / 2;
    }
    return 1 / (2 * $k) + sumUsingRecursion($k - 1);
}
$k = 3;
echo "Sum: " . sumUsingRecursion($k);
echo "<br/>";

//solution4: su dung ham array_sum + mang

function sumUsingArraySum($l)
{
    $arr = [];
    for ($i = 1; $i <= $l; $i++) {
        $arr[] = 1 / (2 * $i);
    }
    return array_sum($arr);
}

$l = 3;
echo "Sum: " . sumUsingArraySum($l);
echo "<br/>";

//solution5: su dung ham reduce

function sumUsingReduce($v)
{
    $arr = range(1, $v);
    return array_reduce($arr, function ($carry, $item) {
        return $carry + 1 / (2 * $item);
    }, 0);
}
$v = 3;
echo "Sum: " . sumUsingReduce($v);
echo "<br/>";
