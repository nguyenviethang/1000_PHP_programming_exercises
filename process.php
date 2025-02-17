<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n'];

    if (!ctype_digit($n) || (int)$n < 1) {
        echo "<p><strong style='color: red;'>Lỗi: Vui lòng nhập một số nguyên dương!</strong></p>";
    } else {
        $n = (int)$n;
        $result = ($n * ($n + 1)) / 2; // Công thức tính tổng nhanh
        echo "<p><strong style='color: green;'>Tổng từ 1 đến $n là: $result</strong></p>";
    }
}
?>
