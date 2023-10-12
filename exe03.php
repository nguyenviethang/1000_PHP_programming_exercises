<?php
//Tính S(n) = 1 + 1/2 + .... 1/n
// function Sum($n) {
//     $sum = 0;
//     for ($i = 1; $i <= $n; $i++) {
//         $sum += 1/$i;
//     }
//     return $sum;
// }


function Sum($n) {
    $sum = 0;
    $i = 1;
    while($i <= $n) {
        $sum += 1/$i;
          $i++;
    }
    return $sum;
}
$n = 10;
$result = Sum($n);
echo "sum of day so $n is: $result";

