<?php
function checkMonthFromQuarterOfTheYear ($month){
    if($month >= 1 && $month <= 12){
        $quarter = ceil($month/3);
        echo " thang {$month} thuoc quy {$quarter} trong nam";
    }else {
        echo "vui long nhap lai mot so tuwf 1 den 12 dai dien cho thang trong nam";
    }
}
$month = readline("nhap thang: ");
checkMonthFromQuarterOfTheYear($month);