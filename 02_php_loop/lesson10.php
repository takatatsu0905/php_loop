﻿<?php
// 以下はランダムな数字を格納した配列を表示するプログラムです。
// 配列内の隣合う数字を比較して左側から小さい順に表示されるよう配列の中身を並び替えてください。
// 並び替えはfor文を使用すること

$arr = [99, 3, 12, 45, 60, 100, 31, 7, 28];

// 例）
// 4, 3, 1, 2
// ↓
// 3, 4, 1, 2
// ↓
// 3, 1, 4, 2
// ↓
// 3, 1, 2, 4
// ↓
// 1, 3, 2, 4
// ↓
// 1, 2, 3, 4　←これが画面に表示される

$arr = [99, 3, 12, 45, 60, 100, 31, 7, 28];

// ここで並び替え処理
for ($i = 0; $i < count($arr); $i++) {
    $sort = count($arr)-$i;
    for ($j = 1; $j < $sort; $j++) {
        if ($arr[$j] < $arr[$j-1]) {
            $swap = $arr[$j];
            $arr[$j] = $arr[$j-1];
            $arr[$j-1] = $swap;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>数字並び替えプログラム</title>
</head>
<body>
    <!-- ここに並び替え後を表示 -->
    <?php foreach ($arr as $val) :?>
        <?php echo $val. "," ;?>
    <?php endforeach;?>
</body>
</html>
