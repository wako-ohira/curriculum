<?php
// $name = $_POST['my_name'];
// $password = $_POST['password'];
// $sex = $_POST['sex'];
// $hidden_param = $_POST['hidden_param'];
// $age = $_POST['age'];
?>

<!-- <p>私の名前は<?php echo $name ?>です。</p>
<p>パスワードは<?php echo $password ?>です。</p>
<p>年齢は<?php echo $age ?>です。</p>
<p>性別は<?php echo $hidden_param ?>です。</p>
<p>性別は<?php echo $sex ?>です。</p> -->

<?php
$name = $_POST['my_name'];
$award = $_POST['award'];
$number = $_POST['number'];
?>

<p>お名前：<?php echo $name ?></p>
<p>ご希望景品<?php echo $award ?></p>
<p>個数：<?php echo $number ?></p>