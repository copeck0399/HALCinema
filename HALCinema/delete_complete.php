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
		<link rel="stylesheet" href="css/delete.css" media="screen" title="css">
		<title>◯退会完了</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
	<h1 class="h1">◯ 退会が完了いたしました。</h1>
	<p class="ptitle1">ご利用ありがとうございました。またの機会をお待ちしております。</p>
	<p class="underline"></p><br>
	
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
