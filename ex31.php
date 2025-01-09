<?php
// //Cho số nguyên dương n. Kiểm tra số nguyên dương n có phải là số nguyên tố hay không?

//solution1
// function isPrimeBasic($n)
// {
//     if ($n <= 1) return false;
//     for ($i = 2; $i < $n; $i++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// echo "nhap vao mot so: ";
// $n = trim(fgets(STDIN));
// $number = floatval($n);

// if (isPrimeBasic($n)) {
//     echo "$n là số nguyên tố.";
// } else {
//     echo "$n không phải là số nguyên tố.";
// }


//solution2
// function isPrimeSqrt($m)
// {
//     if ($m <= 1) return false;
//     for ($i = 2; $i * $i <= $m; $i++) {
//         if ($m % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// echo "nhap vao mot so: ";
// $m = trim(fgets(STDIN));
// $number = floatval($m);

// if (isPrimeSqrt($number)) {
//     echo "$m là số nguyên tố.";
// } else {
//     echo "$m không phải là số nguyên tố.";
// }

//solution3- kiem tra so le - so nguyen to khong the chia het cho 2 nen sau khi kiem tra, chir can kiem tra them cac so le tuwf 3 dens can n

function isPrimeOptimized($k)
{
    if ($k <= 1) return false;
    if ($k == 2) return true;
    if ($k % 2 == 0) return false;
    for ($i = 3; $i * $i <= $k; $i += 2) {
        if ($k % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "nhan so: ";
$k = trim(fgets(STDIN));
$k = floatval($k);

if (isPrimeOptimized($k)) {
    echo "$k la so nguyen to";
} else {
    echo "$k khong la so nguyen to";
}
