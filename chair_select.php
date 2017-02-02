<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/chairs.css">
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/tab.js"></script>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html");

	//座席仮押さえ
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
						<span class="a-a">A</span>
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
						<li class="a-13 right_last">13</li>
					</ul>
					<ul class='line_b'>
						<span class="b-b">B</span>
						<li class='b-1'>1</li>
						<li class='b-2'>2</li>
						<li class='b-3'>3</li>
						<li class='b-4'>4</li>
						<li class='b-5'>5</li>
						<li class='b-6'>6</li>
						<li class='b-7'>7</li>
						<li class='b-8'>8</li>
						<li class='b-9'>9</li>
						<li class='b-10'>10</li>
						<li class='b-11'>11</li>
						<li class='b-12'>12</li>
						<li class="b-13 right_last">13</li>
					</ul>
					<ul class='line_c'>
						<span class="c-c">C</span>
						<li class='c-1'>1</li>
						<li class='c-2'>2</li>
						<li class='c-3'>3</li>
						<li class='c-4'>4</li>
						<li class='c-5'>5</li>
						<li class='c-6'>6</li>
						<li class='c-7'>7</li>
						<li class='c-8'>8</li>
						<li class='c-9'>9</li>
						<li class='c-10'>10</li>
						<li class='c-11'>11</li>
						<li class='c-12'>12</li>
						<li class="c-13 right_last">13</li>
					</ul>
					<ul class='line_d'>
						<span class="d-d">D</span>
						<li class='d-1'>1</li>
						<li class='d-2'>2</li>
						<li class='d-3'>3</li>
						<li class='d-4'>4</li>
						<li class='d-5'>5</li>
						<li class='d-6'>6</li>
						<li class='d-7'>7</li>
						<li class='d-8'>8</li>
						<li class='d-9'>9</li>
						<li class='d-10'>10</li>
						<li class='d-11'>11</li>
						<li class='d-12'>12</li>
						<li class="d-13 right_last">13</li>
					</ul>
					<ul class='line_e'>
						<span class="e-e">E</span>
						<li class='e-1'>1</li>
						<li class='e-2'>2</li>
						<li class='e-3'>3</li>
						<li class='e-4'>4</li>
						<li class='e-5'>5</li>
						<li class='e-6'>6</li>
						<li class='e-7'>7</li>
						<li class='e-8'>8</li>
						<li class='e-9'>9</li>
						<li class='e-10'>10</li>
						<li class='e-11'>11</li>
						<li class='e-12'>12</li>
						<li class="e-13 right_last">13</li>
					</ul>
					<ul class='line_f'>
						<span class="f-f">F</span>
						<li class='f-1'>1</li>
						<li class='f-2'>2</li>
						<li class='f-3'>3</li>
						<li class='f-4'>4</li>
						<li class='f-5'>5</li>
						<li class='f-6'>6</li>
						<li class='f-7'>7</li>
						<li class='f-8'>8</li>
						<li class='f-9'>9</li>
						<li class='f-10'>10</li>
						<li class='f-11'>11</li>
						<li class='f-12'>12</li>
						<li class="f-13 right_last">13</li>
					</ul>
					<ul class='line_g'>
						<span class="g-g">G</span>
						<li class='g-1'>1</li>
						<li class='g-2'>2</li>
						<li class='g-3'>3</li>
						<li class='g-4'>4</li>
						<li class='g-5'>5</li>
						<li class='g-6'>6</li>
						<li class='g-7'>7</li>
						<li class='g-8'>8</li>
						<li class='g-9'>9</li>
						<li class='g-10'>10</li>
						<li class='g-11'>11</li>
						<li class='g-12'>12</li>
						<li class="g-13 right_last">13</li>
					</ul>
					<ul class='line_h'>
						<span class="h-h">H</span>
						<li class='h-1'>1</li>
						<li class='h-2'>2</li>
						<li class='h-3'>3</li>
						<li class='h-4'>4</li>
						<li class='h-5'>5</li>
						<li class='h-6'>6</li>
						<li class='h-7'>7</li>
						<li class='h-8'>8</li>
						<li class='h-9'>9</li>
						<li class='h-10'>10</li>
						<li class='h-11'>11</li>
						<li class='h-12'>12</li>
						<li class="h-13 right_last">13</li>
					</ul>
					<ul class='line_i'>
						<span class="i-i">I</span>
						<li class='i-1'>1</li>
						<li class='i-2'>2</li>
						<li class='i-3'>3</li>
						<li class='i-4'>4</li>
						<li class='i-5'>5</li>
						<li class='i-6'>6</li>
						<li class='i-7'>7</li>
						<li class='i-8'>8</li>
						<li class='i-9'>9</li>
						<li class='i-10'>10</li>
						<li class='i-11'>11</li>
						<li class='i-12'>12</li>
						<li class="i-13 right_last">13</li>
					</ul>
					<ul class='line_j'>
						<span class="j-j">J</span>
						<li class='j-1'>1</li>
						<li class='j-2'>2</li>
						<li class='j-3'>3</li>
						<li class='j-4'>4</li>
						<li class='j-5'>5</li>
						<li class='j-6'>6</li>
						<li class='j-7'>7</li>
						<li class='j-8'>8</li>
						<li class='j-9'>9</li>
						<li class='j-10'>10</li>
						<li class='j-11'>11</li>
						<li class='j-12'>12</li>
						<li class="j-13 right_last">13</li>
					</ul>
				</div>
			</div>
		</div>
		<div class='selected'>
			<div class="inner">
				<div class="selected_chair">
					<h2>選択した座席番号</h2>
					<img src="img/pink_arrow.png" class="pink_arrow">
					<p class="clear_btn"><a href="#">座席選択解除</a></p>
					<div class="chair_box">
						<ul>
							<li><img src="img/chair_gray.png" alt='chair'></li>
							<li><img src="img/chair_gray.png" alt='chair'></li>
							<li><img src="img/chair_gray.png" alt='chair'></li>
							<li><img src="img/chair_gray.png" alt='chair'></li>
							<li><img src="img/chair_gray.png" alt='chair'></li>
							<li><img src="img/chair_gray.png" alt='chair'></li>
						</ul>
					</div>
				</div>
				<div class="next_btn">
					<img src="img/white_arrow.png" class="white_arrow">
					<p><a href="#">決済入力画面へ進む</a></p>
					<small>※混雑時には、処理に数分かかる場合がございます。</small>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
