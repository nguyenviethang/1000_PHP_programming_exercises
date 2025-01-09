<?php
//tinh S(n) = 1/(1*2) + 1/(2*3) + ... 1/(n*(n*1))

function sumUsingForLoop($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += 1 / ($i * ($i + 1));
    }
    return $sum;
}

$n = 5;
echo "S($n): " . sumUsingForLoop($n);
echo "<br/>";

//solution2

function calculateSumSimplified($k) {
    return 1 - 1/($k + 1);
}

$k = 5;
echo "S($k): " . calculateSumSimplified($k);
