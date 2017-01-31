<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/user.css" media="screen" title="css">
		<title>◯予約履歴一覧</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<main>
	<h1 class="h1">◯ 予約履歴一覧</h1>
	<p class="ptitle1">予約した映画情報を確認できます。</p>
	<p class="underline"></p><br>
  <p class="bar">
    履歴一覧
  </p>

      <form method="post" class="form" action="#.php">
        <table>
          <tr>
            <th class="th">予約No/予約日時</th>
						<td class="border-right"><p>タイトル</p></td>
            <td class="border-right"><p>上映日時</p></td>
            <td class="border-right"><p>金額</p></td>
            <td><p>状況</p></td>
          </tr>
          <tr>
            <th class="th">0001/2016/07/01</th>
            <td class="border-right"><p>森山中教習所</p></td>
            <td class="border-right"><p>2016/07/02</p></td>
            <td class="border-right"><p>￥1,500</p></td>
            <td><p>上映済み</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>

          <tr>
            <th class="th">----</th>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td class="border-right"><p>----</p></td>
            <td><p>----</p></td>
          </tr>
		</table>
			<p class="underline5"></p>
      <div class="button2">
					<input type="submit" name="name" class="cancel" value="修正">
					<input type="submit" name="name" class="upload" value="確認">
			</div>
		</form>
	</main>
	<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
