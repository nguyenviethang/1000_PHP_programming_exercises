<?php
//Tính S(n) =1 + 𝑥 + 𝑥^3/3! + X^5/5! +... + X^(2*n+1)/(2*n+1)!
function sumFraction($x, $n)
{
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $denominator = 1;
        for ($j = 1; $j <= (2 * $i + 1); $j++) {
            $denominator *= $j;
        }
        $sum += pow($x, 2 * $i + 1) / $denominator;
    }
    return $sum;
}
$x = 2;
$n = 3;
echo "s:" . sumFraction($x, $n);

