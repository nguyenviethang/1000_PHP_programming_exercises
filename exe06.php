<?php
function sum($n) {
    $sum = 0;
    for($i = 1; $i <= $n; $i++) {
        $sum += (1 / ($i*($i+1)));
    }
    return $sum;
}
$n = 2;
$result = sum($n);
echo "ket qua la{$result}";