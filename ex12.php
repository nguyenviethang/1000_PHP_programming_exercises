<?php
//tinh S(n) = x + x^2 + x^3 + ... + x^n

function factorial($x, $n){
    $product = 0;
    for($i = 0; $i <= $n; $i++){
        $product += pow($x, $i);
    }
    return $product;
}

$x = 2;
$n = 3;
echo "S($n): " . factorial($n, $x);
echo "<br/>";