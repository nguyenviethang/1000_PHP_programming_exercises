<?php
function caculateS($n) {
    $sum = 0;
    $product = 1;
    for ($i = 1; $i <= $n; $i++) {
        $product *= $i;
        $sum += $product;
    }
    return $sum;
}
$n = 3;
$result = caculateS($n);
echo "ket qua la {$result}";