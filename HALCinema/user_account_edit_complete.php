<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/user_account_edit_complete.css" media="screen" title="css">
		<title>◯会員情報変更確認完了</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
<h1>◯変更が完了しました</h1>
	<p class="ptitle1">会員情報の変更が完了しました。</p>
	<p class="underline"></p><br>
	<h2 class="logoh1">下記にて会員情報を変更いたしました。</h2>
	<section>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />変更後も何回でも変更が可能です。</p><br>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />登録済みメールアドレスに会員情報変更のお知らせをお送りします。</p><br>
	</section>

		<form action=".php" class="formadd" method="POST">
			<!-- ***フォームA部分*** -->
			<p class="underline2"></p><br>
			<p class="newform_name">氏名(漢字)</p>
			<p class="newform_text">

				<p>| 春
				太郎</p>
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームA終了*** -->

			<!-- ***フォームB部分*** -->
			<p class="newform_name">氏名(カナ)</p>
			<p class="newform_text">

				<p>| ハル
					タロウ</p>
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームB終了*** -->


			<p>
			<input type="button" name="name" class="cancel" value="キャンセル">
			<input type="button" name="name" class="upload" value="完了">
			</p>
		</form>
	</div>
<?php
	//フッターの読み込み 
	require_once( "footer.html" );
?>
	</body>
</html>
