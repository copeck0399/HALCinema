<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/user_account_edit.css" media="screen" title="css">
		<title>◯会員情報変更</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
	<h1>◯会員情報変更</h1>
	<p class="ptitle1">住所やメールアドレスなどの会員情報の変更ができます。</p>
	<p class="underline"></p><br>
	<h2 class="logoh1">変更したい項目を入力してください！</h2>
	<section>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />入力は変更される項目のみで変更が可能です</p><br>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />変更の際はパスワードは必ず入力してください。</p><br>
	</section>

		<form action=".php" class="formadd" method="POST">
			<!-- ***フォームA部分*** -->
			<p class="underline2"></p><br>
			<p class="newform_name">氏名(漢字)</p>
			<p class="newform_text">

				姓<input type="text" name="name" value="">
				名<input type="text" name="name" value="">
				|  例　：　山田　太郎
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームA終了*** -->

			<!-- ***フォームB部分*** -->
			<p class="newform_name">氏名(カナ)</p>
			<p class="newform_text">

				姓<input type="text" name="name" value="">
				名<input type="text" name="name" value="">
					|  例　：　ヤマダ　タロウ　
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームB終了*** -->

			<!-- ***フォームC部分*** -->
			<p class="newform_name">電話番号</p>
			<p class="newform_text">

				<input type="text" size="30" name="name" value="">
					|  例　：　08012345678
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームC終了*** -->

			<!-- ***フォームD部分*** -->
			<p class="newform_name">メールアドレス</p>
			<p class="newform_text">

				<input type="text" size="40" name="name" value="">
					|  例　：　hal@gmail.com
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームD終了*** -->

			<!-- ***フォームE部分*** -->
			<p class="newform_name">メールアドレス(再入力)</p>
			<p class="newform_text">

				<input type="text" size="40" name="name" value="">
					|  例　：　hal@gmail.com
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームE終了*** -->

			<!-- ***フォームF部分*** -->
			<p class="newform_name">パスワード</p>
			<p class="newform_text">
				<img src="img/hissu.jpg" width="27" height="14" alt="必須" />
				<input type="password" name="name" value="">
					|  例　：　A1B23C4D5E
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームF終了*** -->

			<!-- ***フォームG部分*** -->
			<p class="newform_name">パスワード(再入力)</p>
			<p class="newform_text">
				<img src="img/hissu.jpg" width="27" height="14" alt="必須" />
				<input type="password" name="name" value="">
					|  例　：　A1B23C4D5E
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームG終了*** -->

			<!-- ***フォームH部分*** -->
			<p class="newform_name">秘密の質問</p>
			<p class="newform_text">

				<select id="secret" name="secret">
				<option value="11" selected>好きな食べ物は?</option>
				<option value="22">お母さんの旧姓は?</option>
				<option value="33">出生地は?</option>
				<option value="44">ペットの名前は?</option>
				<option value="55">初めての海外旅行は?</option>

				</select>
					|  例　：　好きな食べ物は？
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームH終了*** -->

			<!-- ***フォームI部分*** -->
			<p class="newform_name">秘密の質問の答え</p>
			<p class="newform_text">

				<input type="text" name="name" value="">
					|  例　：　カレーライス
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームI終了*** -->

			<!-- ***フォームJ部分*** -->
			<p class="newform_name">最寄りの劇場</p>
			<p class="newform_text">

				<select id="shoplist" name="shoplist">
				<option value="11" selected>新宿</option>
				<option value="22">渋谷</option>
				<option value="33">池袋</option>
				<option value="44">恵比寿</option>
				<option value="55">品川</option>
				</select>
					|  例　：　海老名
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームJ終了*** -->

			<!-- ***フォームK部分*** -->
			<p class="newform_name">好きな映画のジャンル</p>
			<p class="newform_text">

				<input type="checkbox" name="j1" value="1"> アクション
				<input type="checkbox" name="j1" value="2"> ロマンス
				<input type="checkbox" name="j1" value="3"> 歴史もの
				<input type="checkbox" name="j1" value="4"> 人間ドラマ <br>
				<input type="checkbox" name="j1" value="5"> コメディ
				<input type="checkbox" name="j1" value="6"> SF
				<input type="checkbox" name="j1" value="7"> ホラー
				<input type="checkbox" name="j1" value="8"> サスペンス
				<input type="checkbox" name="j1" value="9"> ファミリー向け作品
			</p>
			<p class="underline2"></p><br>
			<!-- ***フォームK終了*** -->

			<p>
			<input type="button" name="name" class="cancel" value="キャンセル">
			<input type="button" name="name" class="upload" value="確認">
			</p>
		</form>
	</div>
	<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
