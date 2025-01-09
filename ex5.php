<?php
//Tính S(n) =1 + 1/3 + 1/5 + … + 1/(2n+1)
//solution1: su dung vong lap
function sumUsingForLoop($n)
{
    $sum = 0.0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += 1 / (2 * $i + 1);
    }
    return $sum;
}

$n = 3;
echo "Sum: " . sumUsingForLoop($n);
echo "<br/>";
//solution2: su dung vong lap while

function sumUsingWhileLoop($m)
{
    $sum = 0;
    $i = 0;
    while ($i <= $m) {
        $sum += 1 / (2 * $i + 1);
        $i++;
    }
    return $sum;
}
$m = 3;
echo "Sum: " . sumUsingWhileLoop($m);
echo "<br/>";

//solution3: su dung de quy

function sumUsingRecursion($k)
{
    if ($k == 0) {
        return 1;
    }
    return 1 / (2 * $k + 1) + sumUsingRecursion($k - 1);
}
$k = 3;
echo "Sum: " . sumUsingRecursion($k);
echo "<br/>";

//solution4: su dung array_map va array_sum