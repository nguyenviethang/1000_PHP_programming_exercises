<?php
//Tính S(n) = 1 + 1 𝑥 2 + 1 𝑥 2 𝑥 3 + ⋯ + 1 𝑥 2 𝑥 3 𝑥 ... 𝑥 𝑛
function sum($n) {
    $sum = 0;
    $product = 1;
    for($i = 1; $i <= $n; $i++) {
        $product *= $i;
        $sum += $product; 
    }
    return $sum;
}
$n = 3;
$result = sum($n);
echo "ket qua la {$result}";