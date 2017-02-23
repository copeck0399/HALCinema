<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
  <?php
	//ヘッダーの読み込み
	require_once( "header.html" );
  ?>
  <main>
    <div id = "login_form">
      <div id = "page_title">
        <h1>ログイン</h1>
      </div>
      <div id = "form_input">
        <form>
          <div id = "column">
            <label>メールアドレス</label><br>
            <input type = "text"><br>
            <label>パスワード</label><br>
            <input type = "password"><br>
          </div>
          <input type = "checkbox" name ="memory" value = "memory">次回からログイン情報を記憶する
          <div id = "button">
            <a href="#">ログイン</a>
          </div>
        </form>
      </div>
    </div>
  </main>
	<?php
		//フッターの読み込み
		require_once( "footer.html" );
	?>
</body>
</html>
