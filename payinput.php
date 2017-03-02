<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/payinput.css">
		<title>top</title>
	</head>
	<body>
		<main>
			<div class="payinfo">
				<div class="inner">
				<!-- <p class="none"></p> -->
				<h1>選択いただいた情報</h1>
				<table cellspacing="0">
					<tr>
						<th>劇場</th>
						<td>ハルシネマ　新宿</td>
					</tr>
					<tr>
						<th>上映時間</th>
						<td>2016年7月7(木)　12:00より</td>
					</tr>
					<tr>
						<th>作品</th>
						<td>それいけアンパンマン</td>
					</tr>
					<tr>
						<th>座席</th>
						<td>G-13</td>
					</tr>
					<tr>
						<th>券種</th>
						<td>合計</td>
					</tr>
				</table>
				</div>
			</div>

			<div class="payment">
				<form action="#" method="POST">
				<div class="inner">
					<h1>決済情報入力</h1>
					<p>ご記入いただいた内容は、クレジットカード等の決済及びこれに付随する事務の処理を行うため以外の目的で使用することはございません。</p>
					<p>*メールアドレスはPC・携帯いずれか片方を必ず入力してください。</p>
					<p>*ドメイン指定受信を設定している方は「@hal.co.jp」を追加してください。</p>
				</div>
					<div class="inputcolumn">
							<span>お名前(漢字)</span>
					<small>必須</small>
						<div class="columninner">
							<input type="text">姓
						</div>

						<div class="columninner">
							<input type="text">名
						</div>
						<div class="example">
							<p>例:HAL 太郎</p>
						</div>
					</div>
					<div class="inputcolumn">
							<span>お名前(カナ)</span>
					<small class="none">必須</small>
						<div class="columninner">
						<label>
							<input type="text">
							姓</label>
						</div>

						<div class="columninner">
							<input type="text">名
						</div>
						<div class="example">
							<p>例:ハル タロウ</p>
						</div>
					</div>
					<div class="inputcolumn tel">
					<span>電話番号</span>
						<small>必須</small>
						<div class="columninner">
							<input type="text">
							<input type="text">
						</div>
						<div class="example">
							<p>例:08048574747</p>
						</div>
					</div>

					<div class="inputcolumn mail">
					<span>e-mail(パソコン)*</span>
					<small class="none">必須</small>

						<div class="columninner">
							<input type="text">
						</div>
						<div class="columninner">
						<label>
							<input type="text">
							@</label>
						</div>

						<div class="example mail">
							<p>例:aho@hal.co.jp</p>
						</div>
						<span class="none">e-mail(パソコン)*</span>
						<small class="none">必須</small>

						<div class="columninner">
							<input type="text">
						</div>
						<div class="columninner">
						<label>
							<input type="text">
							@</label>
						</div>

					</div>


					<div class="inputcolumn mail">
					<span>e-mail(携帯)*</span>
					<small class="none">必須</small>

						<div class="columninner">
							<input type="text">
						</div>
						<div class="columninner">
						<label>
							<input type="text">
							@</label>
						</div>

						<div class="example mail">
							<p>例:aho@hal.co.jp</p>
						</div>
						<span class="none">e-mail(*</span>
						<small class="none">必須</small>

						<div class="columninner">
							<input type="text">
						</div>
						<div class="columninner">
						<label>
							<input type="text">
							@</label>
						</div>
					</div>

					<div class="inputcolumn card">
					<span>カード種別</span>
						<small>必須</small>
						<small class="none">必須</small>
						<div class="columninner">
						<select name="card" class="card"> 
							<option value="1">VISA</option>
							<option value="1">VISA</option>
							<option value="1">VISA</option>
							<option value="1">VISA</option>
							<option value="1">VISA</option>
						</select>
						</div>
						<div class="example">
							<p><a href="#">カード番号の入力について</a></p>
						</div>
					</div>

					
					
				</form>
			</div>
			
		</main>
	</body>
</html> 
