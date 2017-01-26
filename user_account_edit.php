<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/memberinfos.css" media="screen" title="css">
		<title>◯会員情報変更</title>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<div class="content">
	<h1 class="h1">◯ 会員情報変更</h1>
	<p class="ptitle1">住所やメールアドレスなどの会員情報の変更ができます。</p>
	<p class="underline"></p><br>
	<h2 class="logoh1">変更したい項目を入力してください！</h2>
	<section>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />入力は変更される項目のみで変更が可能です</p>
		<p class="ptitle"><img src="img/warning.png" width="14" height="14" alt="icon" />変更の際はパスワードは必ず入力してください。</p><br>
	</section>

      <form name="Form1" method="post" action="exit_comfirm.php">
			<div class="form">
        <table>
          <tr>
            <th>氏名（漢字）</th>
            <td>
              　姓<input type="text" class="tbox" name="name1" value="">　名<input type="text" class="tbox" name="name2" value="">
							</td>
								<td>
									<p class="righttext">
									｜　例 ： 山田　太郎
								</p>
            </td>
          </tr>
					<tr>
						<th>氏名（カナ）</th>
						<td>
							セイ<input type="text" class="tbox" name="name3" value="">メイ<input type="text" class="tbox" name="name4" value="">
							</td>
								<td>
									<p class="righttext">
									｜　例 ： ヤマダ　タロウ
								</p>
						</td>
					</tr>

					<tr>
						<th>電話番号</th>
						<td>
							<input type="text" class="tbox2" name="tel" value=""><br>※（半角数字、ハイフンスペース無し）
							</td>
								<td>
									<p class="righttext">
									｜　例 ： 08012345678
								</p>
						</td>
					</tr>

					<tr>
						<th>メールアドレス</th>
						<td>
							<input type="text" class="tbox2" name="mail" value="">
							</td>
								<td>
									<p class="righttext">
									｜　例 ： hal@gmail.com
								</p>
						</td>
					</tr>

					<tr>
						<th>メールアドレス（再入力）</th>
						<td>
							<input type="text" class="tbox2" name="mail" value=""><br>※誤って入力すると、確認メールが届きませんので十分にご注意ください。（コピー&ペースト不可）
							</td>
								<td>
									<p class="righttext">
									｜　例 ： hal@gmail.com
								</p>
						</td>
					</tr>

					<tr>
						<th>パスワード</th>
						<td>
							<img src="img/hissu.jpg" alt="h" width="30px" height="20px" />
							<input type="text" class="tbox2" name="pass" value="">
							</td>
								<td>
									<p class="righttext">
									｜　例 ： A1B23C4D5E
								</p>
						</td>
					</tr>

					<tr>
						<th>パスワード（再入力）</th>
						<td>
							<img src="img/hissu.jpg" alt="h" width="30px" height="20px" />
							<input type="text" class="tbox2" name="pass" value=""><br>
							<input type="checkbox" name="riyu" value="1">パスワードを表示する
							</td>
								<td>
									<p class="righttext">
									｜　例 ： A1B23C4D5E
								</p>
						</td>
					</tr>

					<tr>
						<th>秘密の質問</th>
						<td>
							<select name="example" class="select">
								<option value="1">選択してください</option>
								<option value="2">女房の旧姓は？</option>
								<option value="3">私の祖母の名前は？</option>
								<option value="4">小学校６年生のときの担任は？</option>
								<option value="5">お隣さんのペットの名前は？</option>
							</select>
							</td>
								<td>
									<p class="righttext">
									｜　例 ： 好きな食べ物は？
								</p>
						</td>
					</tr>

					<tr>
						<th>秘密の質問の答え</th>
						<td>
							<input type="text" class="tbox2" name="example2" value="">
							</td>
								<td>
									<p class="righttext">
									｜　例 ： カレーライス
								</p>
						</td>
					</tr>

					<tr>
						<th>最寄の劇場</th>
						<td>
							<select name="station" class="select">
								<option value="1">選択してください</option>
								<option value="2">新宿</option>
								<option value="3">品川</option>
								<option value="4">池袋</option>
								<option value="5">さいたま新都心</option>
							</select>
							</td>
								<td>
									<p class="righttext">
									｜　例 ： 海老名
								</p>
						</td>
					</tr>

					<tr>
						<th>好きな映画のジャンル</th>
						<td class="check">

	<input type="checkbox" name="riyu" value="1">アクション
	<input type="checkbox" name="riyu" value="2">ロマンス
	<input type="checkbox" name="riyu" value="3">歴史もの
	<input type="checkbox" name="riyu" value="4">人間ドラマ<br>
	<input type="checkbox" name="riyu" value="5">コメディ
	<input type="checkbox" name="riyu" value="6">SF
	<input type="checkbox" name="riyu" value="7">ホラー
	<input type="checkbox" name="riyu" value="8">サスペンス
	<input type="checkbox" name="riyu" value="9">ファミリー向け作品
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
