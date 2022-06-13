<?php
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

// 横の合計
$side_arr = [
    'r1' => array_sum($arr['r1']),
    'r2' => array_sum($arr['r2']),
    'r3' => array_sum($arr['r3']),
];

// 縦の合計
$leng_arr = [
    'c1' => array_sum(array_column($arr, 'c1')),
    'c2' => array_sum(array_column($arr, 'c2')),
    'c3' => array_sum(array_column($arr, 'c3')),
];

// 総合計
$totle = array_sum($side_arr);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid;
    border-collapse: collapse;
}
th,td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <!-- ここにテーブル表示 -->
    <table>
        <thead>
            <tr>
                <th>_____</th>
                <th>_c1</th>
                <th>_c2</th>
                <th>_c3</th>
                <th>横合計</th>
            </tr>
        </thead>
        <tbody>
            <!-- r1やr2などの所の呼び出し -->
            <?php for ($i = 1; $i <= count($arr); $i++) :?>
                <?php $arr_key = "r{$i}"; ?>
                <tr>
                    <td><?php echo '___' . $arr_key ;?><>

                    <!-- c1やc2の数値の呼び出し -->
                    <?php for ($j = 1; $j <= count($arr[$arr_key]); $j++) :?>
                        <?php $c_key = "c{$j}"; ?>
                        <td><?php echo $arr[$arr_key][$c_key] ;?></td>
                    <?php endfor;?>

                    <!-- r1,r2の合計呼び出し、横合計呼び出し -->
                    <td><?php echo $side_arr[$arr_key];?></td>
                <tr>
            
            <?php endfor;?>

            <!-- 縦合計 -->
            <tr>
                <td>縦合計</td>
                <?php for ($k = 1; $k <= count($leng_arr); $k++) :?>
                    <?php $c_key = "c{$k}"; ?>
                    <td><?php echo $leng_arr[$c_key] ;?></td>
                <?php endfor;?>
                <td><?php echo $totle; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>