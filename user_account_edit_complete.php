<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/memberinfos.css" media="screen" title="css">
		<title>◯会員情報変更完了</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
	<h1 class="h1">◯ 変更が完了しました。</h1>
	<p class="ptitle1">会員情報の変更が完了いたしました。</p>
	<p class="underline"></p><br>
	<h2 class="logoh1">下記にて会員情報を変更いたしました。</h2>
	<section>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />変更後も何回でも変更が可能です。</p>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />登録済みメールアドレスに会員情報変更うのお知らせをお送りします。</p><br>
	</section>

      <form method="post" action="#.php">
			<div class="form">
        <table>
          <tr>
            <th>氏名（漢字）</th>
								<td>
									<p class="righttext">
									｜　例 ： 山田　太郎
								</p>
            </td>
          </tr>
					<tr>
						<th>氏名（カナ）</th>
								<td>
									<p class="righttext">
									｜　例 ： ヤマダ　タロウ
								</p>
						</td>
					</tr>
		</table>
	</div>
			<p class="underline2"></p>
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
