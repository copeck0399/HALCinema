<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
	<main>
			<div class="gekijo">
				<h1>劇場から探す</h1>
				<h2>
					<img src="img/map.png" alt="movie" class="title_img">
				</h2>
					<ul>
						<li><a href="#">北海道・東北<img src="img/list.jpg" alt=""></a></li>
						<li><a href="#">関東<img src="img/list.jpg" alt=""></a></li>
						<li><a href="#">中部・北越<img src="img/list.jpg" alt=""></a></li>
						<li><a href="#">近畿<img src="img/list.jpg" alt=""></a></li>
						<li><a href="#">中国・四国・九州<img src="img/list.jpg" alt=""></a></li>
					</ul>
			</div>

			<div class="ranking">
				<h1>上映中の作品</h1>
				<h2>
					<img src="img/movie.png" alt="movie" class="title_img">
				</h2>
					<ul>
						<li><img src="img/eiga.png" alt="#"><img src="img/rankingimg.jpg" alt="#"><a href="#">作品タイトル</a></li>
						<li><img src="img/eiga.png" alt="#"><img src="img/rankingimg.jpg" alt="#"><a href="#">作品タイトル</a></li>
						<li><img src="img/eiga.png" alt="#"><img src="img/rankingimg.jpg" alt="#"><a href="#">作品タイトル</a></li>
						<li><img src="img/eiga.png" alt="#"><img src="img/rankingimg.jpg" alt="#"><a href="#">作品タイトル</a></li>
					</ul>
			</div>
			
			<div class="schedule">
				<h1>近日公開予定</h1>
				<h2>
					<img src="img/schedule.png" alt="movie" class="title_img">
				</h2>
					<div class="schedule_top">
					<p>7月21日~</p>
						<div class="schedule_title">
							<a href="#">
							<img src="img/rankingimg.jpg" alt="">
							作品タイトル</a>
						</div>
						<div class="schedule_title">
							<a href="#">
							<img src="img/rankingimg.jpg" alt="">
							作品タイトル</a>
						</div>
					</div>
					
					<div class="schedule_bottom">
					<p>7月21日~</p>
						<div class="schedule_title">
							<a href="#">
							<img src="img/rankingimg.jpg" alt="">
							作品タイトル</a>
						</div>
						<div class="schedule_title">
							<a href="#">
							<img src="img/rankingimg.jpg" alt="">
							作品タイトル</a>
						</div>
					</div>
			</div><!-- schedule -->

			<div class="news">
			<h1>今月のお知らせ/キャンペーン情報</h1>
				<h2>
					<img src="img/info.png" alt="movie" class="title_img">
				</h2>
					<ul>
						<li>a</li>
						<li>df</li>
						<li>few</li>
						<li>few</li>
						<li>a</li>
					</ul>
			</div>
	</main>

<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>

