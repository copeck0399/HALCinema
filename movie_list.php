<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>top</title>
		<link rel="stylesheet" href="css/headfooter.css">
		<link rel="stylesheet" href="css/schedule_list.css">
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/tab.js"></script>
	</head>
	<body>
<?php
	//ヘッダーの読み込み
	require_once( "header.html" );
?>
<main>
	<div class="schedule">
		<div class="schedule_header2">
			<div class="left_column">
				<div class="place">
					<img src="img/schedule_icon.png" alt="icon" />
					<h2>新宿西口</h2>
					<div class="border">
					</div><!--  .border end -->
					<h2 class="right">作品一覧</h2>
				</div><!--  .place end -->
				<div class="place_news">
					<p class="n_title">劇場からのお知らせ</p>
					<p class="n_list"><span>></span>　一覧</p>
					<ul>
						<li>ＨＡＬシネマで現在上映している作品です。</li>
						<li>※劇場により上映作品が異なる場合がございますので、各作品に記載の上映劇場をご確認下さい。</li>
						<li>※上映作品は予告なく変更になることがございます。</li>
						<li>※字幕上映・吹替上映につきましては、上映スケジュールページにてご確認下さい。</li>
					</ul>
				</div><!--  .place_news end -->
			</div><!--  .left_column end -->
			<div class="right_column">
				<div class="theater_map2">
					<p>バナー類</p>
				</div><!--  .theater_map end -->
			</div><!--  .right_column end -->
		</div><!--  .schedule_header end  -->
		<div class="movie_list">
			<div class="tab_contents">
				<div class="now tab_selected">
					<p>上映中の作品</p>
				</div>
				<div class="will non_selected">
					<p>公開予定の作品</p>
				</div>
			</div><!-- .tab_contents end -->
			<div class="lists now_lists">
				<ul>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/aozora.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/aozora.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/aozora.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/aozora.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/aozora.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
				</ul>
			</div><!-- .now_lists end -->

			<div class="lists will_lists">
				<ul>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/gozira.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/gozira.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/gozira.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/gozira.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
					<li>
						<div class="poster" style="margin 0;">
							<img src="img/gozira.jpg" alt="aozora">
						</div>
						<div class="movie_detail">
							<div class="movie_name">
								<p><a href="#">映画タイトル</a></p>
							</div>
							<div class="theater_confirm">
								<p class="confirm_btn">上映中の劇場は、こちらからご確認ください。</p>
								<p class="attention">◆特別興行により、各種割引サービス、各種割引券、各種前売券、平日無料鑑賞券、およびポイントカード無料鑑賞券はご利用いただけません。</p>
								<small>(C) 2016 HALCINEMA 製作委員会</small>
							</div>
						</div>
					</li>
				</ul>
			</div><!-- .will_lists end -->
			<div class="next_lists">
				<ul>
					<li class="selected"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div><!-- .next_lists end -->
		</div><!--.movie_list end -->
	</div><!--  .schedule end -->
</main>
<?php
	//フッターの読み込み
	require_once( "footer.html" );
?>
	</body>
</html>
