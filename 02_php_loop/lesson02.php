<?php
// 以下をfor文を使用して表示してください。

// 987
// 654
// 321
$n = 3; //iの範囲を指定
for ($i = $n; $i >= 1; $i--) {
  //iの範囲はn~1
    echo 3*$i;
    echo 3*$i-1;
    echo 3*$i-2;
    echo "<br>";
}

$x = 9;
for ($a = 1; $a <= $n; $a++) {
    for ($b = 1; $b<= $n; $b++) {
        echo $x;
        $x--;
    }
    echo "<br>";
}
