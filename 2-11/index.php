 <form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name="email"/>
  <br> 
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form>

<?php
echo '<br><br>';
echo "仕様書・設計書" . '<br>';
echo "仕様書：何を（どんなものを）作るかを説明じた資料（完成図）<br>設計書：どうやって作るかを説明した資料" . '<br><br>';
echo "Git" . '<br>';
echo "分散型バージョン管理システム。リモートリポジトリとローカルリポジトリがあり、編集履歴を管理できる。" . '<br><br>';
echo "マージンツール" . '<br>';
echo "ブランチで作成した複数の開発ラインを一つにまとめる方法。複数のものを一つにする機能。";

?>