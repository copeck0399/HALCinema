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
		<link rel="stylesheet" href="css/memberinfos.css" media="screen" title="css">
		<title>◯会員情報確認</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
	<h1 class="h1">◯ 会員情報確認</h1>
	<p class="ptitle1">住所やメールアドレスなどの会員情報の変更ができます。</p>
	<p class="underline"></p><br>
	<h2 class="logoh1">変更する内容の確認をお願いします。</h2>
	<section>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />変更後も何回でも変更が可能です</p>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />確認が出来ましたら、変更するを押してください。</p><br>
	</section>

      <form name="Form1" method="post" action="exit_complete.php">
			<div class="form">
        <table>
          <tr>
            <th>氏名（漢字）</th>
								<td>
									<p class="righttext">

				<?php echo ($name1); ?>
        <?php echo ($name2); ?>

								</p>
            </td>
          </tr>
					<tr>
						<th>氏名（カナ）</th>
								<td>
									<p class="righttext">
								<?php echo ($name3); ?>
                <?php echo ($name4); ?>
								</p>
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
