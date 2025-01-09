<?php
//Cho số nguyên dương n. Kiểm tra số nguyên dương n có phải là số chính phương hay không?
function isSquareNumber($n)
{
    if ($n < 1) return false;
    $sqtN = sqrt($n);
    return $sqtN == floor($sqtN);
}

$n = 9;
if (isSquareNumber($n)) {
    echo "$n la so chinh phuong";
} else {
    echo "$n khong la so chinh phuong";
}
echo "<br/>";

//solution2- dung ham sqrt() ep kieu cho so nguyen
function isPerfectSquare($m)
{
    $sqrt = sqrt($m);
    return $sqrt == (int)$sqrt;
}

$m = 25;
if (isPerfectSquare($m)) {
    echo "$m la so chinh phuong";
} else {
    echo "$m khong la so chinh phuong";
}

// solution3 - dung vong lap de kiem tra so binh phuong
function isSquareNumberS3($k)
{
    for ($i = 1; $i * $i <= $k; $i++) {
        if ($i * $i == $k) {
            return true;
        }
    }
    return false;
}

$k = 36;
if (isSquareNumberS3($k)) {
    echo "$k la so chinh phuong";
} else {
    echo "$k khong la so chinh phuong";
}
//solution4- so chinh phuong la nghiem cua phuong trinh bac 2, va kiem tra delta
//khi khac lam va tim hieu
