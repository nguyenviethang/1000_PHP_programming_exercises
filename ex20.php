<?php
//Liệt kê tất cả “ước số” của số nguyên dương n. 
function divisorList($n) {
    $divisor = [];
    for($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0) {
            $divisor[] = $i;
        }
    }
    return $divisor;
}
$n = 36;
echo "<pre>";
print_r(divisorList($n));
echo "</pre>";
//solution2- kiểm tra đến căn bậc hai của n

function divisorListSolution2($m) {
    $divisorS2 = [];
    for($i = 1; $i * $i <= $m; $i++) {
        if($m % $i === 0) {
            $divisorS2[] = $i;
            if($i != $m / $i){
                $divisorS2[] = $m / $i;
            }
        }
        
    }
    sort($divisorS2);
    return $divisorS2;

}
$m = 36;
echo "<pre>";
print_r(divisorListSolution2($m));
echo "</pre>";

//sự dụng hàm của mảng array_filter và range

function divisorListSolution3($k) {
    return array_filter(range(1,$k), function($i) use ($k) {
        return $k % $i == 0;
    });
}
$k = 36;
echo "<pre>";
print_r(divisorListSolution3($k));
echo "</pre>";

