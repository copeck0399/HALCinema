<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/mains.css">
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
<?php
	//メインの読込
	require_once("main.php");
 ?>
<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
