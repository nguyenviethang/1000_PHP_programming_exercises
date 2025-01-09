<?php
function calculateT($x, $n) {
    return $x ** $n;
}

$x = 2; // Thay đổi giá trị của x tại đây
$n = 3; // Thay đổi giá trị của n tại đây
$result = calculateT($x, $n);
echo "T($x, $n) = $result";
