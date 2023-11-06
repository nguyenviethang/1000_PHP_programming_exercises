<?php
function sum($n)
{
    $sum = 1;
    for ($i = 1; $i <= $n; $i++) {
        $sum *= $i;
    }
    return $sum;
}
$n = 5;
$result = sum($n);
echo "ket qua la: {$result}";
