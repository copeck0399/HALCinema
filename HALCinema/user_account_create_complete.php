<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/user_account_create_complete.css" media="screen" title="css">
		<title>◯登録完了</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
	<p class="ptitle1">今後はログインの際に下記のIDおよびパスワードが必要となりますので、<br />
	忘れないように保存しておいてください。<br />
	確認の為、ご登録いただいたメールアドレス宛に登録完了メールを送信いたしました。
	</p>
	<p class="ptitle1"><input type="button" class="login_back" value="ログイン画面へ"></p>
	<p class="underline"></p><br>
	<p class="ptitle1"><h1 class="logoh1">登録内容</h1></p>
	<div class="content">
		<form action=".php" class="formadd" method="POST">
			<table>
				<tr>
					<td>氏名(漢字)</td>
					<td>春野　市根間</td>
				</tr>
				<tr>
					<td>氏名(カナ)</td>
					<td>ハルノ　シネマ</td>
				</tr>
				<tr>
					<td>電話番号</td>
					<td>080-1234-5678</td>
				</tr>
				<tr>
					<td>メールアドレス</td>
					<td>halcinema@gmail.com</td>
				</tr>
				<tr>
					<td>メールアドレス(再入力)</td>
					<td>halcinema@gmail.com</td>
				</tr>
				<tr>
					<td>パスワード</td>
					<td>******</td>
				</tr>
				<tr>
					<td>秘密の質問</td>
					<td>好きな食べ物は？</td>
				</tr>
				<tr>
					<td>秘密の質問の答え</td>
					<td>カレーライス</td>
				</tr>
				<tr>
					<td>最寄りの劇場</td>
					<td>新宿</td>
				</tr>
				<tr>
					<td>好きな映画のジャンル</td>
					<td>アクション、ホラー、人間ドラマ、ファミリー向け作品</td>
				</tr>
			</table>
		</form>
	</div>
	<!-- フッターの読み込み  -->
	<!-- require_once( "footer.html" ); -->
?>
	</body>
</html>
