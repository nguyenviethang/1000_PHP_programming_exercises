<?php
// //Tính S(n) = 1(bình phương) + 2(bình phương) + 3(bình phương) + ... + n(bình phương). 
// function total($n) {
//     $total = 0;
//     for($i = 1; $i <= $n; $i++) {
//         $total += $i * $i;
//     }
//     return $total;

// }
// $n = 10;
// $result = total($n);
// echo "Total of day so $n is : $result";

function sum($n) {
    return ($n * ($n + 1) * (2 * $n + 1)) / 6;
}
$n =10;
$result = sum($n);
echo "Total of day $n is : $result";