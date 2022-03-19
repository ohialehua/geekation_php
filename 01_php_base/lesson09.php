<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。

function judge()
{
    $array = [10, 60, 90, 50];
    foreach ($array as $score) {
        if ($score >= 80) {
            echo $score."点は「優」です。<br>";
        } elseif ($score >= 60) {
            echo $score."点は「良」です。<br>";
        } elseif ($score >= 40) {
            echo $score."点は「可」です。<br>";
        } else {
            echo $score."点は「不可」です。<br>";
        }
    }
}

//連想配列の要素を条件分岐で上書きする書き方
function jud()
{
    $array = [10 => "?", 60 => "?", 90 => "?", 50 => "?"];
    foreach ($array as $score => $judge) {
        if ($score >= 80) {
            $judge = "優";
        } elseif ($score >= 60) {
            $judge = "良";
        } elseif ($score >= 40) {
            $judge = "可";
        } else {
            $judge = "不可";
        }
        echo $score."点は「".$judge."」です。<br>";
    }
}
judge();
jud();
