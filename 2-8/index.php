<?php
// foreach

$fruits = ["りんご", "みかん", "もも"];

foreach ($fruits as $value) {
  echo $value;
}
?>


<?php
echo '<br><br>';

$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];

foreach ($fruits as $key => $value) {
  echo $key;
  echo $value;
  echo '<br>';
}

?>

<?php
echo '<br><br>';
echo "提出課題";
echo '<br>';

$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];

foreach ($fruits as $key => $value) {
  echo $key. "といったら". $value;
  echo '<br>';
}

echo '<br><br>';
echo "トランザクション" . '<br>';
echo "関連・依存する複数の処理のまとめ。ワンセットの一連の流れ" . '<br><br>';
echo "排他ロック" . '<br>';
echo "ファイルやデータのアクセスや更新を制御すること" . '<br><br>';
echo "チューニング " . '<br>';
echo "目標の状態に近づけたり性能を最大限に引き出すこと。パフォーマンスの向上を図ること" ;
?>