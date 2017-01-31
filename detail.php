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

	$stmt = $pdo->prepare('SELECT * FROM film WHERE title = "君の名は。"');
	$stmt -> execute();
	foreach ($stmt as $row){
		$img1 = $row["img1"];
		$img2 = $row["img2"];
		$img3 = $row["img3"];
		$release = $row["rdate"];
		$year = $row["year"];
		$country = $row["country"];
		$runtime = $row["runtime"];
		$company = $row["company"];
		$supply = $row["supply"];
		$actor = $row["actor"];
	}
	?>

	<main>
		<p class="none">a</p>
			<h1>君の名は。</h1>
		<div class="outer">
			<div id="slide">
				<div class="changeimg">
					<img src="" alt="list">
				</div>
				<div class="imglist">
					<img src="img/<?php echo $img1?>" alt="list">
					<img src="img/<?php echo $img2?>" alt="list">
					<img src="img/<?php echo $img3?>" alt="list">
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
				<p>[公開日]	<?php echo $release ?></p>
				<p>[制作年]	<?php echo $year ?>年</p>
				<p>[制作国]	<?php echo $country ?></p>
				<p>[上映時間] <?php echo $runtime ?>分</p>
				<p>[制作会社] <?php echo $company ?></p>
				<p>[配給] <?php echo $supply ?></p>
				<p>[出演] <?php echo $actor ?></p>
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
