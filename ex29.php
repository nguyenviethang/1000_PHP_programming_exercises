<?php
//Tìm ước số lẻ lớn nhất của số nguyên dương n.
//solution1:
function oddMaxDivisor($n)
{
    $max = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0 && $i % 2 !== 0) {
            $max[] = $i;
        }
    }
    return max($max);
}

$n = 36;
echo "<pre>";
print_r(oddMaxDivisor($n));
echo "<pre/>";

//solution2: duyet mang từ n xuống-- hay
function findLargestOddDivisor($m)
{
    for ($i = $m; $i >= 1; $i--) {
        if ($m % $i === 0 && $i % 2 !== 0) {
            return $i;
        }
    }
    return 1;
}

$m = 36;
echo "<pre>";
print_r(findLargestOddDivisor($m));
echo "<pre/>";

//solution3: bỏ hết các ước chẵn
function findLargestOddDivisorS3($m)
{
    while ($m % 2 == 0) {
        $m / 2;
    }
    return $m;
}

$m = 56;
echo "uoc so le lon nhat la: " . findLargestOddDivisorS3($m);
echo "<br/>";

//solution4: dùng đệ quy
function findLargestOddDivisorS4($k)
{
    if ($k % 2 == 0) {
        return findLargestOddDivisorS4($k / 2);
    }
    return $k;
}

$k = 36;
echo "uoc so le lon nhat la:" . findLargestOddDivisorS4($k);

//solution5: sự dụng bitwise
function findLargestOddDivisorS5($a)
{
    return $a & (~$a + 1);
}

$a = 36;
echo "uoc so le lon nhat: " . findLargestOddDivisorS5($a);
