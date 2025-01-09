<?php
//tinh S($n) = 1/2 + 3/4 + 5/6 ... (2n+1)/(2n+2)

function Sum($n)
{
    $sum = 0.0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += (2 * $i + 1) / (2 * $i + 2);
    }
    return $sum;
}
$n = 5;
echo "S($n): " . sum($n);
echo "<br/>";
