<?php
//Bài 1: Tính S(n) = 1 + 2 + 3 + … + n
function sumUsingForLoop($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;        
    }
    return $sum;
}

$n = 5;
echo "sum: " . sumUsingForLoop($n);
echo "<br/>";

//solution2: su dung cong thuc cap so cong

function sumUsingFormula ($m) {
    return $m*($m+1)/2;
}
$m = 5;
echo "sum: " . sumUsingFormula($m);
echo "<br/>";

//solution3 su dung de quy
function sumUsingRecursion ($k) {
    if($k == 1){
        return 1;
    }
    return $k + sumUsingRecursion($k-1); 
}
$k = 5;
echo "sum: " . sumUsingRecursion($k);
echo "<br/>";

//solution3 su dung ham array_sum va range

function sumUsingArraySum($p) {
    return array_sum(range(1,$p));
}
$p = 5;
echo "sum: " . sumUsingArraySum($p);
echo "<br/>";

