<!-- UNIXタイムスタンプ -->

<?php
// タイムスタンプ(1970年1月1日午前0時0分0秒から何秒経過しているか)
echo time();
echo '<br>';
var_dump(time());
?>
<br><br>
<?php
// タイムスタンプから日付に戻す
echo date("Y-m-d H:i:s", time());

echo '<br>';
// 直接タイムスタンプを指定して日付に戻す(1970年1月1日午前0時0分0秒から1491980400秒ごの日付)
echo date("Y-m-d H:i:a", 1491980400);

?>

<br><br>

<?php
// 特定日付のタイムスタンプを取得
echo strtotime("2017/2/16 11:25:00");

echo '<br>';
// 日付ではない指定方法
echo strtotime("last Sunday");
echo '<br>';
echo strtotime("+2 day");
?>


<br><br>
<?php
echo "課題";
echo '<br>';
// 2017年12月31日23時59分59秒のタイムスタンプ
echo strtotime("2017/12/31 23:59:59");
echo '<br>';
// ↑を日付に戻す
echo date("Y-m-d H:i:s", 1514764799);

echo '<br><br>';

echo "ログ". '<br>';
echo "ログ：コンピュータに記録される情報のこと。ログ管理システムや専用のソフトウェアを使って確認をする。". '<br><br>';
echo "クラウドサーバー、レンタルサーバー、VPSの違い". '<br>';
echo "クラウドサーバーは、複数の加工サーバーを個別で利用する。レンタルサーバーは、一つの物理的なサーバーを複数の利用者で共有する。VPSは一つの仮想サーバー群を個別で利用する。". '<br><br>';
echo "PHPのFWの種類と特徴". '<br>';
echo "CakePHP：歴史のあるフレームワーク。数年前のシステムで使われている確率が高い。<br>
      Zend Framework：豊富なライブラリ<br>
      Symfony：Ruby on Railsの流れを組むフレームワーク。高速に動作することが利点。
      Code Igniter：機能は少なめだが、軽量で高速に動作する。構成が単純でわかりやすい。
      Fuel PHP：Code Igniterを改良して開発されたのも
      Ethna：細かい処理をサポートしてくれて、メイン機能に集中しやすい
      Laravel：最近のフレームワーク。わかりやすく、コードが綺麗に書かれている";

?>
