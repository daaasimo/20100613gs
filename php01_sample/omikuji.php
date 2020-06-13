<?php
// phpタグの中身はサーバで実行される
$rand = rand(1, 5);
// 乱数の生成


// 条件分岐
if ($rand == 1) {
    $result = "大吉";
} elseif ($rand == 2) {
    $result = "中吉";
} elseif ($rand == 3) {
    $result = "小吉";
} elseif ($rand == 4) {
    $result = "凶";
} elseif ($rand == 5) {
    $result = "大凶";
} else {
    $result = "エラー";
}

// 動作確認

// PHPのあとにhtmlを追加しよう
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>今日の運勢は<?= $result ?></h1>
</body>

</html>

// !->tabでフォーマット作成が可能（通常のhtmlファイルと同様）

// 動作確認
// サーバでPHPが実行->生成されたhtmlがブラウザに送られて表示される

// htmlと組み合わせるときはPHPタグを省略しないこと（PHPとhtmlの区別がつかなくなるため）