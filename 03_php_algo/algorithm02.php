<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

$yen = 20037;   // 購入金額
$product = 150; // 商品金額

function calc($yen, $product) {
    // この関数内に処理を記述
    $change = $yen - $product;
    if ($change >= 0) {
        echo "{$yen}円で{$product}円の商品を購入しました。<br>";
        $yukichi = floor($change / 10000); //10000円札の枚数
            $change -= $yukichi*10000; //10000をかけてお釣りから引く
        $ichiyou = floor($change / 5000); //5000円札の枚数
            $change -= $ichiyou*5000; //5000をかけてお釣りから引く
        $hideyo = floor($change / 1000); //1000円札の枚数
            $change -= $hideyo*1000; //1000をかけてお釣りから引く
        $gohyaku = floor($change / 500); //500円玉の枚数
            $change -= $gohyaku*500; //500をかけてお釣りから引く
        $hyaku = floor($change / 100); //100円玉の枚数
            $change -= $hyaku*100; //100をかけてお釣りから引く
        $gojuu = floor($change / 50); //50円玉の枚数
            $change -= $gojuu*50; //50をかけてお釣りから引く
        $juu = floor($change / 10); //10円玉の枚数
            $change -= $juu*10; //10をかけてお釣りから引く
        $goen = floor($change / 5); //5円玉の枚数
            $change -= $goen*5; //5をかけてお釣りから引く
            //この時点で$changeは0~4の整数のどれかになり、それは1円玉の枚数に等しい
        echo "お釣りは、10000円札が{$yukichi}枚、5000円札が{$ichiyou}枚、1000円札が{$hideyo}枚、500円玉が{$gohyaku}枚、100円玉が{$hyaku}枚、50円玉が{$gojuu}枚、10円玉が{$juu}枚、5円玉が{$goen}枚、1円玉が{$change}枚です。";
    } else {
        echo -$change."円足りません。";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php
            calc($yen, $product);
        ?>
    </section>
</body>
</html>