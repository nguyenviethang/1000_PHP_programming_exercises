<?php
function isPrimeBasic($n)
{
    if ($n <= 1) return false;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "nhap vao mot so: ";
$n = trim(fgets(STDIN));
$number = floatval($n);

if (isPrimeBasic($n)) {
    echo "$n là số nguyên tố.";
} else {
    echo "$n không phải là số nguyên tố.";
}