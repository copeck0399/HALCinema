<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.roundabout.js"></script>
		<script>
		    $(document).ready(function() {
		        $('#slideshow ul').roundabout();
		    });
		</script>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
	<main>
	<div class="carten">	
		<div id="mainvisual">
	    <div id="slideshow">
	      <ul>
	        <li><img src="img/aozora.jpg" /></li>
	        <li><img src="img/gost.jpg" /></li>
	        <li><img src="img/gozira.jpg" /></li>
	        <li><img src="img/pets.jpg" /></li>
	        <li><img src="img/women.jpg" /></li>
	        <li><img src="img/kiminonawa04.png" /></li>
	      </ul>
	    </div>
		</div>
	</div>

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
						<li><span>10gatu</span>q322423</li>
						<li><span>11gatu</span>423t2g2g2</li>
						<li><span>11gatu</span>423t2g2g2</li>
						<li><span>11gatu</span>423t2g2g2</li>
					</ul>
			</div>
			<div class="banner"></div>
	</main>

<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>

