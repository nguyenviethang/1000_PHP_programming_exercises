<?php 
//tinh S($n) = 1*2*3... *n

//solution1
function sum($n) {
    $sum = 1;//lưu ý, với phép nhân khi khởi tạo biến thì bắt đầu bằng 1 để phép nhân được đúng
    for($i = 1; $i <= $n; $i++){
        $sum *= $i;
    }
    return $sum;
}
$n = 5;
echo "S($n): " . sum($n);
echo "<br/>";

//solution2

