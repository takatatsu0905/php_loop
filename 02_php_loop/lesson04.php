﻿<?php
// 以下をfor文を使用して表示してください。

// 321
// 32
// 3

for ($i = 1; $i < 4; $i++) {
    for ($j = 3; $j >= $i; $j--) {
        echo $j;
    }
    echo "<br>";
}
