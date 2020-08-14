<!-- <form action="result.php" method="post">
    この中にinputタグを記述していきます。 
    お名前：<input type="text" name="my_name"?>
    <br>
    パスワード：<input type="password" name="password"/>
    <br>
    性別：
    <input type="radio" name="sex" value="男性">男性
    <input type="radio" name="sex" value="女性">女性
    <br>
    年齢：
    <select name="age">
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
    </select>
    <br>
    <input type="hidden" name="hidden_param" value="隠しパラメータから">
    <input type="submit" value="送信するよ！" />
</form> 
-->

<form action="result.php" method="post">
お名前：<input type="text" name="my_name">
<br>
ご希望商品：
<input type="radio" name="award" value="A賞">A賞
<input type="radio" name="award" value="B賞">B賞
<input type="radio" name="award" value="C賞">C賞
<br>
個数：
<select name="number">
    <?php for($i=1;$i<=10;$i++){ ?>
    <option value="<?php echo $i; ?>">
      <?php echo $i; ?>
    </option>
    <?php } ?>
</select>
<br>
<input type="submit" value="申込">
</form>

<br><br>
<?php
echo "モジュール" . '<br>';
echo "単体としても機能する交換可能な部品。他のものと合体させて使うと便利。" . '<br><br>';
echo "バージョン管理システム" . '<br>';
echo "ファイルの変更履歴を管理してくれるシステムのこと" . '<br><br>';
echo "セブクエリ" . '<br>';
echo "SQL 主にselect文でのSQL文の中に書いているSQL文のこと。またはSQL文を入れ子にしたSQL文の中に書いてあるSQL文のこと。";
?>