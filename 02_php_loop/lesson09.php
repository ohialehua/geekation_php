﻿<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <table>
        <thead>
            <th></th>
            <?php
            foreach ($arr as $KEY => $value) {
            }
            foreach ($value as $key => $val) {
                echo "<th>$key</th>";
            }
            ?>
            <th>横合計</th>
        </thead>
        <tbody>
            <?php
            $sum_x = 0;
            foreach ($arr as $KEY => $value) {
                echo "<tr>";
                echo "<th>$KEY</th>";
                foreach ($value as $key => $val) {
                    echo "<td>$val</td>";
                    $sum_x += $val;
                }
                echo "<td>$sum_x</td>";
                $sum_x = 0;
                echo "</tr>";
            }
            ?>
            <th>縦合計</th>
            <?php
            $sum_y = 0;
            $SUM = 0;
            for ($n = 1; $n <= 3; $n++) {
                $cn = 'c'.$n;
                foreach ($arr as $KEY => $value) {
                    $sum_y += $value[$cn];
                }
                echo "<td>$sum_y</td>";
                $SUM += $sum_y;
                $sum_y = 0;
            }
            echo "<td>$SUM</td>";
            ?>
        </tbody>
    </table>
    <!-- ここにテーブル表示 -->
</body>
</html>