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
<!-- main -->
<main>
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
</main>
<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
