<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/user.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<main>
  <div id = "mypage">

    <div id = "mypage_title">
      <a><img src = "img/return.png">トップに戻る</a>
      <h1>マイページ</h1>
			<div class="line"></div>
    </div>

    <div id = "column_wrapper">
      <div id = "info">
        <div id = "users">
          <ul>
            <li>ユーザー</li>
            <li>はちみつ様</li>
            <li>最寄りの劇場</li>
            <li>養蜂場</li>
          </ul>
        </div>
				<div id = "news">
	        <p>新着情報</p>
	        <ul>
	          <li>7月</li>
	          <li>クレジットカードでの決済が可能になりました</li>
	        </ul>
					<p class="underline3"></p>
				</div>
      </div>
      <div id = "reserve">
        <h1><a href="#" class="color">最寄りの劇場から予約する</a></h1>
        <p>現在の最寄り劇場 養蜂場 から<a href = "#" class = "orange">予約</a>
           最寄り以外で予約する場合は<a href = "#" class = "orange">こちら</a></p>
      </div>
      <div id = "modify">
        <h1><a href="#" class="color">会員情報の変更</a></h1>
        <p>パスワード、メールアドレスや最寄りの劇場の変更ができます</p>
        <p>退会は<a href = "#" class = "orange">こちら</a></p>
      </div>
      <div id = "confirm">
          <h1><a href="#" class="color">現在の予定状況の確認</a></h1>
        <p>チケット、座席の予約状況を確認します</p>
        <p>確認は<a href = "#" class = "orange">こちら</a></p>
      </div>
      <div id = "history">
        <h1><a href="#" class="color">予定状況の確認</a></h1>
        <p>チケット、座席の予約履歴を確認します</p>
        <p>確認は<a href = "#" class = "orange">こちら</a></p>
      </div>
    </div>
  </div>
</main>
<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
