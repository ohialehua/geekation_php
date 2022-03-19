<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください

$now = time();
print("現在時刻<br>");
echo date("Y年m月d日　H時i分s秒", $now)."<br><br>";

$timestamp = strtotime("+3day");
print("現在より3日後<br>");
echo date("Y年m月d日　H時i分s秒", $timestamp)."<br><br>";

$timestamp = strtotime("-12hour");
print("現在より12時間前<br>");
echo date("Y年m月d日　H時i分s秒", $timestamp)."<br><br>";

$date = new DateTime("2020-01-01");
$today = new DateTime("now");
$diff = $date -> diff($today);
echo $diff->format('2020年元旦から現在までの経過日数は%a日です。');

//time()関数は現在のUNIXタイムスタンプ
//date()関数はフォーマットを指定して日付の文字列等
//strtotime()関数は日付表現をUNIXタイムスタンプに変換して返す
//DateTimeクラスは日付の計算などに有効
