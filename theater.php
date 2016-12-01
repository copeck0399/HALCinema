<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/theater.css">
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );

	//DB接続設定
	include("../dbconnection/config.php");
	include("../dbconnection/connect.php");

	//SQL
	$hokkaido = $pdo->prepare('select * from theater where area = "北海道"');
	$hokkaido = execute();

?>
<main>
	<div id="theater">
		<div class="page_title">
			<h1>上映劇場</h1>
		</div>
		<div class="map">
			<div class="theater_text">
				<h3></h3>
				<ul>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
				</ul>
			</div>
			<div class="theater_text">
				<h3>【地方名】</h3>
				<ul>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
				</ul>
			</div>
			<div class="theater_text">
				<h3>【地方名】</h3>
				<ul>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
				</ul>
			</div>
			<div class="theater_text">
				<h3>【地方名】</h3>
				<ul>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
				</ul>
			</div>
			<div class="theater_text">
				<h3>【地方名】</h3>
				<ul>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
				</ul>
			</div>
			<div class="theater_text">
				<h3>【地方名】</h3>
				<ul>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
					<li><a href="#"><span class="list-type">・</span>劇場名</a></li>
				</ul>
			</div>
		</div>
		<div class="attention">
			<ul>
				<li><img src="img/imax.png">マークの劇場は、IMAX導入劇場です。</li>
				<li><img src="img/atmos.png">マークの劇場は、DOLBY ATMOS 導入劇場です。</li>
				<li><img src="img/thx.png">マークの劇場は、THX導入劇場です。</li>
				<li><img src="img/ultira.png">マークの劇場は、ULTIRA導入劇場です。</li>
				<li><img src="img/4dx.png">マークの劇場は、4DX導入劇場です。</li>
			</ul>
			<p>
				※注意書き～～～～～～～～～～～～～～～～～～～～～～
			</p>
			<p>
				※注意書き～～～～～～～～～～～～～～～～～～～～～～
			</p>
			<p>
				※注意書き～～～～～～～～～～～～～～～～～～～～～～
			</p>
			<p>
				※注意書き～～～～～～～～～～～～～～～～～～～～～～
			</p>
			<p>
				※注意書き～～～～～～～～～～～～～～～～～～～～～～
			</p>
		</div>
	</div>
</main>
<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
