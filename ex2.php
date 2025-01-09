<?php
//Bài 2: Tính S(n) = 1^2 + 2^2 + … + n^2
//solution1
function sumUsingForLoop($n)
{
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += $i * $i;
    }
    return $sum;
}

$n = 5;
echo "sum: " . sumUsingForLoop($n);
echo "<br/>";


//solution2: su dung cong thuc toan hoc

function sumOfSquaresFormula($m) {
    return ($m*($m+1)*(2*$m+1))/6;
}
$m = 5;
echo "sum: " . sumOfSquaresFormula($m);
echo "<br/>";

//solution3: su dung de quy
function sumUsingRecursion($k) {
    if($k == 1) {
        return 1;
    }
    return $k*$k + sumUsingRecursion($k-1);
}

$k = 5;
echo "sum: " . sumUsingRecursion($k);
echo "<br/>";