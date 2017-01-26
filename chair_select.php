<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/chairsss.css">
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/tab.js"></script>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html");
?>
<main>
	<div class='chairs'>
		<div class='settings'>
			<div class='inner'>
				<ul class='price_list'>
					<li class='price_box'>
					一般<span class='price'>¥1,800</span>
					<div class='plus'>
						<p class='btn'>＋</p>
					</div>
					<div class='minus'>
						<p class='btn'>ー</p>
					</div>
					</li>
					<li class='price_box'>
					大高生<span class='price'>¥1,500</span>
					<div class='plus'>
						<p class='btn'>＋</p>
					</div>
					<div class='minus'>
						<p class='btn'>ー</p>
					</div>
					</li>
					<li class="price_box">
					小中学生<span class="price">¥1,000</span>
					<div class='plus'>
						<p class="btn">＋</p>
					</div>
					<div class='minus'>
						<p class="btn">ー</p>
					</div>
					</li>
					<li class="price_box">
					幼児<span class="price">¥800</span>
					<div class='plus'>
						<p class="btn">＋</p>
					</div>
					<div class='minus'>
						<p class="btn">ー</p>
					</div>
					</li>
					<li class='price_box last'>
					障害者<span class="price">¥800</span>
					<div class='plus'>
						<p class="btn">＋</p>
					</div>
					<div class='minus'>
						<p class="btn">ー</p>
					</div>
					</li>
				</ul>
				<div class='sum'>
					<ul class="sum_list">
						<li class="sum_ticket">
							<h4>合計チケット枚数</h4>
							<h3><span class="num">3</span>枚</h3>
						</li>
						<li class="sum_price">
							<h4>合計金額</h4>
							<h3><span class='num'>¥4,500</span>
							</h3>
						</li>
					</ul>
				</div>
				<div class='selectbtn'>
					<p>座席を選ぶ</p>
				</div>
			</div>
		</div>
		<div class='select'>
			<div class='inner'>
				<div class="screen">
					<h3>スクリーン</h3>
				</div>
				<div class='chair'>
					<ul class='line_a'>
						<li class='a-a'>A</li>
						<li class='a-1'>1</li>
						<li class='a-2'>2</li>
						<li class='a-3'>3</li>
						<li class='a-4'>4</li>
						<li class='a-5'>5</li>
						<li class='a-6'>6</li>
						<li class='a-7'>7</li>
						<li class='a-8'>8</li>
						<li class='a-9'>9</li>
						<li class='a-10'>10</li>
						<li class='a-11'>11</li>
						<li class='a-12'>12</li>
						<li class="a-13">13</li>
					</ul>
				</div>
			</div>
		</div>
		<div class='selected'>
			
		</div>
	</div>
</main>
<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
