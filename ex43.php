<?php
//Hãy đếm số lượng chữ số của số nguyên dương n
//solution 1- su dung strlen() trong php
// $n = 12345;
// $count = strlen($n);
// echo "so luong chu so cua so nguyen duong $n la: " . $count;

//solution2- su dung phep chia lien tuc vaf ep kieu cho ket qua
// $n =12345;
// $count = 0;
// while($n > 0) {
//     $n = (int)($n / 10);
//     $count++;
// }
// echo "so luong chu so cua so nguyen duong n la: " . $count;

//solution3 - su dung log10
// $m = 12345;
// $count = (int)log10($n) +1;
// echo "so luong chu so cua song nguyen duong n la : " . $count;