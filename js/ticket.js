$(function(){
	//カウント用変数
	var count = 0;
	//プライス用変数
	var price = 0;
	//合計プライス用変数
	var sumprice;
	//それぞれの＋、ーボタンにプライスを紐付ける
	$('.adult .plus .btn').click(function(){
		count++;
		price += 1800;
		//もしカウントが7になったらアラート
		if (count > 6){
           alert('一度に6枚までしかご購入できません。');
           //強制的に6に戻す
           count = 6;
           price = price-1800;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});

	$('.a_student .plus .btn').click(function(){
		count++;
		price += 1500;
		//もしカウントが7になったらアラート
		if (count > 6){
           alert('一度に6枚までしかご購入できません。');
           //強制的に6に戻す
           count = 6;
           price = price-1500;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	$('.c_student .plus .btn').click(function(){
		count++;
		price += 1000;
		//もしカウントが7になったらアラート
		if (count > 6){
           alert('一度に6枚までしかご購入できません。');
           //強制的に6に戻す
           count = 6;
           price = price-1000;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	$('.child .plus .btn').click(function(){
		count++;
		price += 800;
		//もしカウントが7になったらアラート
		if (count > 6){
           alert('一度に6枚までしかご購入できません。');
           //強制的に6に戻す
           count = 6;
           price = price-800;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	$('.handicapped .plus .btn').click(function(){
		count++;
		price += 800;
		//もしカウントが7になったらアラート
		if (count > 6){
           alert('一度に6枚までしかご購入できません。');
           //強制的に6に戻す
           count = 6;
           price = price-800;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	//-ボタンを押したら合計枚数を減らす
	$('.adult .minus .btn').click(function(){
		count--;
		price -= 1800;
		//もしカウントが-1になったらアラート
		if (count == -1){
           alert('1枚以上はご購入ください。');
           //強制的に0に戻す
           count = 0;
           price = 0;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	$('.a_student .minus .btn').click(function(){
		count--;
		price -= 1500;
		//もしカウントが-1になったらアラート
		if (count == -1){
           alert('1枚以上はご購入ください。');
           //強制的に0に戻す
           count = 0;
           price = 0;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	$('.c_student .minus .btn').click(function(){
		count--;
		price -= 1000;
		//もしカウントが-1になったらアラート
		if (count == -1){
           alert('1枚以上はご購入ください。');
           //強制的に0に戻す
           count = 0;
           price = 0;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	$('.child .minus .btn').click(function(){
		count--;
		price -= 800;
		//もしカウントが-1になったらアラート
		if (count == -1){
           alert('1枚以上はご購入ください。');
           //強制的に0に戻す
           count = 0;
           price = 0;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});
	$('.handicapped .minus .btn').click(function(){
		count--;
		price -= 800;
		//もしカウントが-1になったらアラート
		if (count == -1){
           alert('1枚以上はご購入ください。');
           //強制的に0に戻す
           count = 0;
           price = 0;
        }
        //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);
	});

	$('.minus .btn').click(function(){
		if(count == 0){
	       //強制的に0に戻す
	       count = 0;
	       price = 0;
	    //カウント数を挿入
        $('.sum .sum_list .sum_ticket h3 .num').text(count);
	    $('.sum .sum_list .sum_price h3 .num').text('¥'+price);	
		}
	});
});
