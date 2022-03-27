<?php
// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。
if (!empty($_POST)) { //"!"でempty関数の変数が空かどうかをチェック
    $lastName = $_POST['last_name'];
    $firstName= $_POST['first_name'];
    if ($lastName != null && $firstName != null) {
        echo '私の名前は'.$lastName.$firstName.'です。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' method="post">
        <label>姓</label>
        <input type="text" name="last_name"/>
        <label>名</label>
        <input type="text" name="first_name" />
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>
