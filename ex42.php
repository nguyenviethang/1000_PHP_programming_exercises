<?php
//Cho n là số nguyên dương. Hãy tìm giá trị nguyên dương k lớn nhất sao cho S(k) < n. Trong đó chuỗi S(k) được định nghĩa như sau : S(k) = 1 + 2 + 3 + ... + k.

function findMaxK($n) {
    $S = 0;
    $k = 0;

    while($S < $n) {
        $k++;
        $S += $k;
    }

    return $k-1;
}
$n = 20;
$k = findMaxK($n);
echo 'gia tri lon nhat cau k sao cho S(k) > $n la: ' . $k;
