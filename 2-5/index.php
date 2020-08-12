
<?php

// ※提出課題は98行目からです

?>


<?php 
$age = 18;

if ( $age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}

?>

<?php

//  A != B  …AとBが等しくないとき

?>



<?php

echo '<br>';

$age = 24;
$is_student = true;

if ($age < 25 && $is_student) {

    echo "学生パックが使えるよ";

} elseif ($age < 25) {

    echo "若者応援割引が使えるよ";

} else {
    echo "残念ながら割引はありません";

}

?>


<?php

echo '<br>';

$blood = "B";

switch ($blood) {

case "A":
  print "A型";
break;
case "B":
  print"B型";
break;
case "C":
  print "C型";
break;
case "O":
  print "O型";
break;
default:
echo "血液型を入力してください";

}

?>

<?php
echo '<br>';

$name = "";

if ($name !== "") {
    echo "名前を受け付けました";
} else {
    echo "名前を入力してください";
}

// ↑の書き換え 三項演算子
echo '<br>';
echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';

?>




<?php

echo '<br><br>';
echo "課題";
echo '<br>';
// 提出課題

$name = "hanako";
$password = "pass";

if ($name == "taro" && $password == "pass") {
    echo "ログイン成功です";
} elseif ($name == "taro") {
    echo "パスワードが間違っています";
} elseif ($password == "pass") {
    echo "名前が間違っています";
} else {
    echo "入力情報が間違っています";
}

// この場合は、パスワードがpassでtrueで、名前がhanakoでfalesなので、「名前が間違っています」と表示される。
?>

<?php
echo '<br><br>';
echo "IDE（統合開発環境)" . '<br>';
echo "ソースコードを記述するエディタやそこからプログラムを生成するコンパイラ（人間がわかる高水準なプログラミング言語をパソコンが解釈できるように変換するソフトウェア）コードの修正をしてくれる開発ツールを一つにした開発環境 (VScodeもその一つ)" . '<br><br>';
echo "JOIN（データベースにおいて)" . '<br>';
echo "テーブル結合。データを入れておく箱の役割をしているテーブルをくっつけて一つにするイメージ" . '<br><br>';
echo "コンフリクト" . '<br>';
echo "変更履歴の競合のこと。AさんとBさんで同じファイルで作業したりして、１つのファイルに対して別々の変更履歴があると発生する" ;



