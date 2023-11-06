<?php
function sum($n) {
    $sum = 0;
    for($i = 0; $i <= $n; $i++) {
        $sum += (2*$i+1)/(2*$i + 2);
    }
    return $sum;
}
$n = 2;
$result = sum($n);
echo "ket qua la: {$result}";