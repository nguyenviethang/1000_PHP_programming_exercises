<?php

//Tính S(n) =1 + 1/2 + 1/3 + … + 1/n

//solution1
function sumUsingForLoop($n)
{
    $sum = 0.0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += 1 / $i;
    }
    return $sum;
}
$n = 5;
echo "Sum: " . sumUsingForLoop($n);
echo "<br/>";

//solution2:su dung de quy

function sumUsingRecursion($m)
{
    if ($m == 1) {
        return 1;
    }
    return 1 / $m + sumUsingRecursion($m - 1);
}
$m = 5;
echo "Sum: " . sumUsingRecursion($m);
echo "<br/>";

//solution3: su dung ham array_sum voi mang

function sumUsingArraySum($k)
{
    $arr = [];
    for ($i = 1; $i <= $k; $i++) {
        $arr[] = 1 / $i;
    }
    return array_sum($arr);
}
$k = 5;
echo "sum: " . sumUsingArraySum($k);
echo "<br/>";

//solution4: su dung array_reduce,
function sumUsingArrayReduce($l)
{
    $arr = range(1, $l);
    return array_reduce($arr, function ($carry, $item) {
        return $carry + 1 / $item;
    }, 0);
}
$l = 5;
echo "sum: " . sumUsingArrayReduce($l);
echo "<br/>";
