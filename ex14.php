<?php
//Tính S(n) = 𝑥 +𝑥3 +𝑥5...+𝑥2𝑛+1.
function sumPower($x, $n){
    $product = 0;
    for($i = 0; $i <= $n; $i++){
        $product += pow($x, 2*$i+1);
    }
    return $product;
}

$x = 2;
$n = 2;
echo "S($n): " . sumPower($x, $n);