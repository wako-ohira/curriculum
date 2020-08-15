<?php
// 要素の数を数える
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];

echo count($members);

?>
<br><br>
<?php
// 要素の並べ替え
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];

sort($members);
var_dump($members);

echo '<br><br>';

$numbers = [26, 35, 17, 67, 45];

var_dump(sort($numbers));

?>

<br><br>

<?php
// 配列の中にある要素が存在するか
// いるならいるよ、いないならいないよ
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];

in_array("kimura", $members);

if(in_array("yoshida", $members)){
  echo "吉田さんがいます";
}else{
  echo "吉田さんはいないです";
}

echo '<br><br>';


// 配列を結合して文字列に変換

$atstr = implode("@", $members);
echo $atstr . '<br>';
var_dump($atstr);

// 文字列を指定の区切りで配列にする カンマ区切り
echo '<br><br>';

$re_numbers = explode("@", $atstr);
var_dump($re_numbers);

echo '<br><br>';

// よく使う！カンマ区切りの文字列
$str = "1,2,3,4,5";
$array = explode(",", $str);
var_dump($array);


echo '<br><br>';

echo "要件定義（要件仕様書）". '<br>';
echo "システム開発における工程の一つで、お客さんがどんなものを欲しいのかをまとめること。それをまとめたものが要件仕様書。その次に基本設計がくる。". '<br><br>';
echo "単体テスト・結合テスト". '<br>';
echo "単体テスト：一つ一つのシステムを合わせる前に、それらがしっかりと機能するか確認すること。<br>結合テスト：単体テストをしたものを合体させて機能するかを確認すること". '<br><br>';
echo "テスト仕様書". '<br>';
echo "どんな条件の元でテストをするのかをまとめて、ファイルや紙にしたもの";

?>