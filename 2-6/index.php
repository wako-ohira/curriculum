<?php
// 提出課題は52行目から

echo "While  繰り返す回数が決まっていない時" .' <br>';
echo "Do...While  最低１回は繰り返したい時" . '<br>';
echo "For  繰り返す回数が決まっている時" . '<br><br>';

$num = 0;
while($num < 10) {
    echo $num;
    $num++;
}

echo '<br>';
?>


<?php
$num = 0;

do {
    echo $num;
    $num++;
} while($num < 10);

echo '<br>';

for ($i=0; $i<10; $i++) {
    echo $i;
}

echo '<br>'
?>


<?php 
$num = 0;

while($num < 10) {
    echo $num;
    $num++;
    if ($num == 5) {
    break;
    }
}

echo '<br><br>';
?>



<?php
// 提出課題

for ($i=1;$i<=100;$i++) {
    echo $i.'<br>';

}

echo '<br><br>';

echo "サブルエリ" . '<br>';
echo "データベースとやりとりをする言語をSQL。データベースに対して「これ探して」といったような命令文であるselect文（SQL文を使った)の書き方の形式は、select(取り出す項目)from(対象のテーブル)where(取り出す条件)である。そのカッコの中に、同じくこの形式を入れ込んだSQL文のこと" . '<br><br>';
echo "Bootstrap" . '<br>';
echo "webデザインを効率よく開発するためのフレームワーク。ボタンやレスポンシブを簡単に実装することができる。" . '<br><br>';
echo "ライブラリ・フレームワーク" . '<br>';
echo "ライブラリ：汎用性の高い便利なプログラムのまとまり<br>フレームワーク：汎用的に必要なものをまとめている枠組み" .  '<br><br>';

?>