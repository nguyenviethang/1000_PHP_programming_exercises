<?php
////solve S(n) =1 + 𝑥 + 𝑥^2/2! + X^4/4! +... + X^(2*n)/(2*n)!

function sumFraction($x, $n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $denominator = 1;
        for ($j = 1; $j <= 2 * $i; $j++) {
            $denominator *= $j;
        }
        $sum += pow($x, 2 * $i) / $denominator;
    }
    return $sum;
}
$x = 2;
$n = 3;
echo "S:" . sumFraction($x, $n);
