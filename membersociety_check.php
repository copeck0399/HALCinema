

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/user.css" media="screen" title="css">
		<title>◯退会</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
	<h1 class="h1">◯ 退会</h1>
	<p class="ptitle1">退会することが出来ます。</p>
	<p class="underline"></p><br>
	<h2 class="logoh1">一度、退会すると再度同じ情報で登録はできません。</h2>
	<section>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />会員情報及びすべての情報は削除されます。</p>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />退会後、新規登録することが可能うです。</p><br>
	</section>

      <form class="formbox" name="Form1" method="post" action="membersociety_end.php">
			<div class="form">
        <table>
          <tr>
						<th>パスワード</th>
						<td>
							<input type="text" class="tbox2" name="pass" value="">
							</td>
					</tr>

					<tr>
						<th>パスワード（再入力）</th>
						<td>
							<input type="text" class="tbox2" name="pass2" value="">
							</td>
					</tr>

		</table>
	</div>
			<p class="underline2"></p>
      		<p class="button">
			<input type="submit" name="name" class="cancel" value="キャンセル">
			<input type="submit" name="name" class="upload" value="確認">
			</p>
		</form>
	</div>
	<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
