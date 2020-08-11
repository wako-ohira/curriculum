<?php
// 課題は43行目から
$countries = ["America", "Japan", "China", "Korea"];

echo $countries[0];
echo $countries[3];

echo '<br><br>';
// 配列全体を出したい時はvar_dump
var_dump($countries);
echo $countries;

echo '<br><br>';
// 連想配列 入っている箱に名前をつけて忘れないようにする
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

echo $fruits["apple"];
echo $fruits["grape"];

echo '<br><br>';
var_dump($fruits);

echo '<br>';

$fruits["banana"] = "バナナ";
var_dump($fruits)
?>

<?php
echo '<br><br>';


$fruits = ["りんご", "みかん", "ぶどう"];
// 要素の追加・変更
$fruits[3] = "もも";
var_dump($fruits);

echo '<br><br>';

?>

<?php
// 課題提出
echo '<br><br>';
echo "課題" . '<br>';
$color = ["red" => "赤", "blue" => "青", "green" =>"緑"];
var_dump($color);

echo '<br><br>';
$color["yellow"] = "黄色";
var_dump($color);

echo '<br><br>';

echo "プルリクエスト" . '<br>';
echo "開発者のローカルリポジトリでの機能追加や変更箇所を他の開発者に通知する機能。わかりやすく表示してくれる" . '<br><br>';
echo "Git Flow" . '<br>';
echo "master,release,develop,feature,hot-fixを役割ごとにブランチを使い分ける。基本的にはfeatureブランチで個々の機能の実装などをして、developにマージする。その後、release,masterへとマージしてプロジェクト終了" . '<br><br>';
echo "CRON" . '<br>';
echo "UNIX系のOSに入っているプログラムの一つで、利用者が事前に設定したスケジュールに従って指定されたプログラムを動かしてくれるもの。" ;

?>