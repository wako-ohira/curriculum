<?php

function getTriangleArea($base,$height) {
  $area = $base * $height /2;
  print "三角形の面積は" . $area . "だよ。";
}

getTriangleArea(10,5);
getTriangleArea(15,8);
getTriangleArea(8,6);

?>




<?php
echo '<br><br>';

function getBoxVolume($depth,$width,$height) {
  $volume = $depth * $width * $height;
  print "直方体の体積は" . $volume . "です。";
}

getBoxVolume (5,10,8);

echo '<br><br>';
echo "ハッシュ化" . '<br>';
echo "値をハッシュ関数と呼ばれる関数（値を入れると適当な値を返してくれる）に入れて、適当な値（ハッシュ値）に変換すること" . '<br><br>';
echo "総合テスト" . '<br>';
echo "(System Test)システム開発における工程の一つで、作ったシステムの最終段階のテスト。お客さんが実際に使う時と同じ状況で動かしたり、たくさん動かしてみてしっかりシステムが完成したか確認するテスト" . '<br><br>';
echo "デバッグ" . '<br>';
echo "プログラムでおかしいところ、不具合の原因を探して直すこと（バグ：虫）" ;


?>

