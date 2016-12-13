<?php
	//ヘッダーの読み込み
	require_once( "header.html" );

	//DB接続設定
	include("dbconnection/config.php");
	include("dbconnection/connect.php");

	$hokkaido = $pdo -> prepare('select name from theater where area = "北海道"');
	$hokkaido -> execute();
	$tohoku = $pdo -> prepare('select name from theater where area = "東北"');
	$tohoku -> execute();
	$chubu = $pdo -> prepare('select name from theater where area = "中部"');
	$chubu -> execute();
	$kanto = $pdo -> prepare('select name from theater where area = "関東"');
	$kanto-> execute();
	$kansai = $pdo -> prepare('select name from theater where area = "関西"');
	$kansai -> execute();
	$kyushu = $pdo -> prepare('select name from theater where area = "九州"');
	$kyushu -> execute();

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/theater.css">
	</head>
	<body>
		<main>
			<div id="theater">
				<div class="page_title">
					<h1>上映劇場</h1>
				</div>
				<div class="map">
					<div class="theater_text">
						<h3>【北海道】</h3>
						<ul>
							<?php
								foreach ($hokkaido as $row){
									$name1 = $row["name"];
							 ?>
							<li><a href="#"><span class="list-type">・</span><?php echo $name1 ?></a></li>
							<?php
								}
							?>
						</ul>
					</div>
					<div class="theater_text">
						<h3>【東北】</h3>
						<ul>
							<?php
								foreach ($tohoku as $row){
									$name2 = $row["name"];
							 ?>
							<li><a href="#"><span class="list-type">・</span><?php echo $name2 ?></a></li>
							<?php
								}
							?>
						</ul>
					</div>
					<div class="theater_text">
						<h3>【中部】</h3>
						<ul>
							<?php
								foreach ($chubu as $row){
									$name3 = $row["name"];
							 ?>
							<li><a href="#"><span class="list-type">・</span><?php echo $name3 ?></a></li>
							<?php
								}
							?>
						</ul>
					</div>
					<div class="theater_text">
						<h3>【関東】</h3>
						<ul>
							<?php
								foreach ($kanto as $row){
									$name4 = $row["name"];
							 ?>
							<li><a href="#"><span class="list-type">・</span><?php echo $name4 ?></a></li>
							<?php
								}
							?>
						</ul>
					</div>
					<div class="theater_text">
						<h3>【関西】</h3>
						<ul>
							<?php
								foreach ($kansai as $row){
									$name5 = $row["name"];
							 ?>
							<li><a href="#"><span class="list-type">・</span><?php echo $name5 ?></a></li>
							<?php
								}
							?>
						</ul>
					</div>
					<div class="theater_text">
						<h3>【九州】</h3>
						<ul>
							<?php
								foreach ($kyushu as $row){
									$name6 = $row["name"];
							 ?>
							<li><a href="#"><span class="list-type">・</span><?php echo $name6 ?></a></li>
							<?php
								}
							?>
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
