<?php
//代入演算子
$x = 5;
//文字と文字を結合させる時は. 連結演算子
echo "hello" . "world";
echo '<br>';
$hello = "Hello";
$world = "World!!";
echo $hello . $world;

echo '<br>';

echo 3 + 5;
echo '<br>';
echo 30 - 9;
echo '<br>';
echo 2 * 4;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 30 % 4; //あまりの数

echo '<br>';

$x++;  //3行目の5に１を足した数になる $x++ は $x = $x + 1 と同じ
echo $x;

echo '<br>';
$x--;  //ここでは5+1=6 の6から1を引いている
echo $x;



echo '<br>';
$x = 9;

echo $x;
echo '<br>';
// $x = $x + 4 の意味
echo $x += 4;
echo '<br>';
echo $x *= 3;
echo '<br>';
echo $x /= 6;
echo '<br>';
echo $x -= 2;
echo '<br>';
echo $x *= 9;
echo '<br>';
echo $x += 0.5;
echo '<br>';
echo $x %= 8;


echo '<br>' . '<br>';
echo "エビデンス" . '<br>';
echo "テストした証拠。システム開発で正しく動いている、もしくは不具合が生じたことを示す証拠のデータや書類のこと" . '<br>' . '<br>';
echo "バッチ" . '<br>';
echo "まとめて行う処理のこと。予め一連の手順を登録しておき、どこかでまとめて一括処理する方法。" . '<br>' . '<br>';
echo "MVCモデル" . '<br>';
echo "Model（表示や入力に関係しない処理）とView（表示や入力に関係する処理）Controller（モデルとビューの繋ぎ役）分けて作る、プログラムの中身整理するための概念";


?>


