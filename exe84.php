<?php
function firstDegreeEquations($a, $b)
{
    if ($a == 0) {
        echo " phuong trinh vo nghiem";
    } else {
        $c = (-$b / $a);
        echo " phuong trinh co nghiem la: " . $c;
    }
}
$a = readline("nhap so a: ");
$b = readline("nhap so b: ");
firstDegreeEquations($a, $b);