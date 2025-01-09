<?php
//Tính S(n) = 1+ 1*2 + 1*2*3+⋯+1*2*3 *...* 𝑛 
function factorial($n){
    $product = 1;
    for($i = 1; $i <= $n; $i++){
        $product *= $i;
    }
    return $product;
}
function sumFactorials($n){
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
        $sum += factorial($i);
    }
    return $sum;
}
$n = 5;
echo "S($n): " . sumFactorials($n);

// function factorial($n) {
//     $product = 1;
//     for ($i = 1; $i <= $n; $i++) {
//         $product *= $i;
//     }
//     return $product;
// }

// function sumFactorials($n) {
//     $sum = 0;
//     for ($i = 1; $i <= $n; $i++) {
//         $sum += factorial($i);
//     }
//     return $sum;
// }

// $n = 5; // Thay giá trị n theo ý muốn
// echo "S($n) = " . sumFactorials($n);