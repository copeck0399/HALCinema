$(function(){
	//座席を選ぶを押したら
	$('.selectbtn').click(function(){
		//グレーの椅子の数を取得
		var box = $(".chair_box ul li").length;
		//グレーの椅子の数が０だったら
		if(box == 0){
			//合計チケット枚数の数字を取得
			var num = $('.sum .sum_list .sum_ticket h3 .num').html();
			//確認
			//console.log(num);
			//numの分グレーの椅子を表示
			for(var i=0; i<num; i++){
				$('.chair_box ul').append(
					'<li><img src="img/chair_gray.png" alt="chair"></li>'
				);
			}
			$(".black").fadeOut(500);
		}else{
			alert('既に追加されています');
		}


	//座席をクリックしたら１つ１つ画像をピンクに
	var cnum = 0;
	$('.chair li').click(function(){
		//座席を選んだ数（クリック数）を取得
		$(this).data('click', ++cnum);
		var click = $(this).data('click');
		//alert(click);

		//選んだ座席の背景色をピンクに
		$(this).css({
			'background-color':'#ff495e'
		});

		//グレーの椅子の数を取得
		var box = $(".chair_box ul li").length;
		//クリックした座席番号を取得
		var chairnum = $(this).attr('class');
		console.log(chairnum);

		//選んだ座席分だけピンクにする
		if(click == 1){
			$('.chair_box ul li:first-child img').attr('src','img/chair_selected.png').attr('alt','pink');
			//取得した座席番号をピンクの椅子に追加
			$('.chair_box ul li:first-child').append(
				'<div class="chair_num"><p>'+chairnum+'</p></div>'
			);
		}else if(click == 2){
			$('.chair_box ul li:nth-child(2) img').attr('src','img/chair_selected.png').attr('alt','pink');			
			//取得した座席番号をピンクの椅子に追加
			$('.chair_box ul li:nth-child(2)').append(
				'<div class="chair_num"><p>'+chairnum+'</p></div>'
			);
		}else if(click == 3){
			$('.chair_box ul li:nth-child(3) img').attr('src','img/chair_selected.png').attr('alt','pink');
			//取得した座席番号をピンクの椅子に追加
			$('.chair_box ul li:nth-child(3)').append(
				'<div class="chair_num"><p>'+chairnum+'</p></div>'
			);
		}else if(click == 4){
			$('.chair_box ul li:nth-child(4) img').attr('src','img/chair_selected.png').attr('alt','pink');
			//取得した座席番号をピンクの椅子に追加
			$('.chair_box ul li:nth-child(4)').append(
				'<div class="chair_num"><p>'+chairnum+'</p></div>'
			);
		}else if(click == 5){
			$('.chair_box ul li:nth-child(5) img').attr('src','img/chair_selected.png').attr('alt','pink');
			//取得した座席番号をピンクの椅子に追加
			$('.chair_box ul li:nth-child(5)').append(
				'<div class="chair_num"><p>'+chairnum+'</p></div>'
			);
		}else if(click == 6){
			$('.chair_box ul li:last-child img').attr('src','img/chair_selected.png').attr('alt','pink');
			//取得した座席番号をピンクの椅子に追加
			$('.chair_box ul li:last-child').append(
				'<div class="chair_num"><p>'+chairnum+'</p></div>'
			);
		}else if(click > 6){
			alert("これ以上座席を選択できません");
			click = 6;
			//alert(click);
		}

		//ピンクになっている椅子の数を取得
		var box2 = $('.chair_box ul li img[alt="pink"]').length;
	});



	});



	//クリアボタン
	$('.clear_btn').click(function(){
		$('.chair_box li').remove();
		$('.chair li').css({
			'background-color':'#9894b9'
		});
	});
});
