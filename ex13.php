<?php 
//tinh S(n) = x^2 + x^4 + .. + x^(2*n)
function sumPower($x, $n){
    $product = 0;
    for($i = 1; $i <= $n; $i++){
        $product += pow($x, 2*$i);
    }
    return $product;
}

$x = 2;
$n = 2;
echo "S($n): " . sumPower($x, $n);

