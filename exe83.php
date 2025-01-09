<?php
function checkSameSign($num1, $num2) {
    if( ($num1 <= 0 && $num2 <= 0 ) || ($num1 > 0 && $num2 > 0)){
        return true;
    } else {
        return false;
    }
}
$num1 = readline("nhap so thu nhat: ");
$num2 = readline("nhap so thu hai: ");

if (checkSameSign($num1, $num2)){
    echo "hai so cung dau.";
} else {
    echo "hai so khong cung dau.";
}
