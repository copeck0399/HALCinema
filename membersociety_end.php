<?php
$name1 = $_POST["name1"];
$name2 = $_POST["name2"];
$name3 = $_POST["name3"];
$name4 = $_POST["name4"];
$email = $_POST["email"];
$tell = $_POST["tell"];

 ?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/user.css" media="screen" title="css">
		<title>◯退会完了</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
	<h1 class="h1">◯ 退会が完了いたしました。</h1>
	<p class="ptitle1">退会いたしました。</p>
	<p class="underline"></p><br>
	<h2 class="logoh1">一度、退会すると再度同じ情報で登録はできません。</h2>
	<section>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />会員情報及びすべての情報は削除されます。</p>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />退会後、新規登録することが可能うです。</p><br>
	</section>
		<form>
      <p class="button">
				<input type="button" name="name" class="upload" value="TOPへ戻る">
			</p>
		</form>
	</div>
	<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
