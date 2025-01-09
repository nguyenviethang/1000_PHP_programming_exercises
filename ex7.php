<?php
//tinh S($n) = 1/2 + 2/3 + 3/4 +... n/(n+1)

//solution1
function sum($k)
{
    $sum = 0;
    for ($i = 1; $i <= $k; $i++) {
        $sum += $i / ($i + 1);
    }
    return $sum;
}

$k = 5;
echo "S($k): " . sum($k);
echo "<br/>";


//solution2

function calculateSumSimplified($n) {
    $sum = $n;
    for($j = 2; $j <= $n + 1; $j++){
        $sum -= 1 / $j;
    }
    return $sum;
}
$n = 5;
echo "S($n): " . calculateSumSimplified($n);