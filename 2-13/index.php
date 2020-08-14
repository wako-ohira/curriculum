<?php

$x = 5.2;
// 切り上げ
echo ceil($x) . '<br>';

// 切り捨て
echo floor($x) . '<br>';

// 四捨五入
echo round($x) . '<br>';


echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
}
// 半径が2の円の面積の計算
circleArea(2);


echo '<br>';

// 乱数
echo mt_rand(1,100);

?>

<br><br>

<!-- 文字列に関する関数 -->
<?php

// 文字列の長さ
$str = "hogehoge";
echo strlen($str) . '<br>';
// マルチバイトでの表示の仕方
$str = "あいうえお";
echo mb_strlen($str) . '<br>';

// 文字の何番目にあるか
$str = "yoneyama";
echo strpos($str, "a") . '<br>';

// 文字列の切り取り
echo substr($str, -2, 2) . '<br>';

// 置き換え
echo str_replace("neya", "NEYA", $str) . '<br>';

$str = "I am Yoneyama";
echo str_replace(" ", "", $str) . '<br><br>';

?>

<!-- 表示に関する関数 -->
<?php

// どこに何の変数があるか分かりやすく！printf
$name = "米山さん";
$limit_number = 40;
echo $name."の残り時間はあと".$limit_number."です" . '<br>';
// %s…文字列,%d…数値
printf("%sの残り時間はあと%dです", $name, $limit_number);

echo '<br>';

// 二桁で表したいとき
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

echo '<br>';

// 変数に代入できるprintf

$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;

echo '<br><br>';

echo "PostgreSQL・Oracle SQL" . '<br>';
echo "どちらもリレーショナルデータベースシステム（表形式のテーブルを関連づけたモデルを使ったデータベースを使ったインターネットを使うシステム）" . '<br>';
echo "PostgreSQL：オープンソースのRDBMS。無料で日本語にも対応している。Oracle DB：オラクル社が開発したデータベース管理システムで、安全性が高い。" . '<br><br>';
echo "TortoiseGit・TortoiseSVN" . '<br>';
echo "TortoiseGit：Windowsで使用可能で、Gitを扱いやすくしたソフトウェア。コマンドを使用せずに操作ができる。TortoiseSVN：同じくコマンドを利用せず、Windows対応のSVNの機能を使えるソフトウェア<br>" . '<br><br>';
echo "外部設計・内部設計" . '<br>';
echo "外部設計：要件定義で決定したものを基にしたシステムの基本的な設計。<br>外部設計：外部設計を基にシステム内部の動作や機能をなどの詳細な設計";

?>