<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/detail.css">
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );

	//データベース接続に必要なファイル群
	include("dbconnection/config.php");
	include("dbconnection/connect.php");

	$img1 = $pdo->prepare('SELECT img1 FROM film WHERE title = "君の名は。"');
	$img2 = $pdo->prepare('SELECT img2 FROM film WHERE title = "君の名は。"');
	$img3 = $pdo->prepare('SELECT img3 FROM film WHERE title = "君の名は。"');

	$img1 -> execute();
	$img2 -> execute();
	$img3 -> execute();


	// $release = $pdo->prepare('SELECT rdate FROM film WHERE title = "君の名は。"');
	// $release -> execute();

	$year = $pdo->prepare('SELECT year FROM film WHERE title = "君の名は。"');
	$year -> execute();

	$country = $pdo->prepare('SELECT country FROM film WHERE title = "君の名は。"');
	$country -> execute();

	$runtime = $pdo->prepare('SELECT runtime FROM film where title = "君の名は。"');
	$runtime -> execute();



?>

	<main>
		<p class="none">a</p>
			<h1>君の名は。</h1>
		<div class="outer">
			<div id="slide">
				<div class="changeimg">
					<img src="img/rankingimg.jpg" alt="changeimg">
				</div>
				<div class="imglist">
					<img src="img/" + <?php $img1?> alt="list">
					<img src="img/" + <?php $img2?> alt="list">
					<img src="img/" + <?php $img3?> alt="list">
				</div>
			</div>
		</div>

		<div class="list">
		<h2>上映劇場</h2>
			<ul>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
				<li><a href="#">劇場名</a></li>
			</ul>
		</div>

		<div class="overview">
		<h2>作品概要</h2>
			<article>
				<p>ストーリー</p>
				<!-- <p>[公開日]	<?php echo $release ?></p> -->
				<p>[制作年]	<?php echo $year ?></p>
				<p>[制作国]	<?php echo $country ?></p>
				<p>[上映時間] <?php echo $runtime ?></p>
				<p>[制作会社]</p>
				<p>[制作会社・制作]</p>
				<p>[配給]</p>
				<p>[企画]</p>
				<p>[出演]</p>
			</article>
		</div>

		<div class="other">
			<h2>その他の作品</h2>
			<ul>
				<li>
					<a href="#">
						<img src="img/rankingimg.jpg" alt="a">
						タイトル1
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/rankingimg.jpg" alt="a">
						タイトル
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/rankingimg.jpg" alt="a">
						タイトル
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/rankingimg.jpg" alt="a">
						タイトル
					</a>
				</li>
			</ul>
		</div>
		<p class="none">a</p>
	</main>

<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>