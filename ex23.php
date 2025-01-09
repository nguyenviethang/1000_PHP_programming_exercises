<?php
//Đếm số lượng “ước số” của số nguyên dương n.
function countDivisor($n) {
    $count = 0;
    for($i = 1; $i <= $n; $i++) {
        if($n % $i === 0) {
            $count++;
        }
    }
    return $count;
}
echo "<pre>";
print_r(countDivisor(9));
echo "</pre>";

//solution2- tối ưu nhất - Cách tiếp cận này dựa trên việc chỉ kiểm tra đến căn bậc hai của 𝑛. Nếu 𝑖là ước của n, thì 𝑛/i cũng là ước của 𝑛. Điều này giúp giảm đáng kể số lần lặp.

function countDivisorsOptimal($m) {
    $count = 0;
    for($i = 1; $i * $i <= $m; $i++) {
        if($m % $i === 0) {
            if($i === $m / $i) {
                $count += 1;
            } else {
                $count += 2;
            }
        }
    }
    return $count;
}
echo "<pre>";
print_r(countDivisorsOptimal(9));
echo "</pre>";
