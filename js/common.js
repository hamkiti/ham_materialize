(function($) {
	$('#mobile-side-manu').sidenav();
	$('a[href="#sidenav_close"]').on('click', function(ev){
		ev.preventDefault();
		$('.sidenav-overlay').trigger('click');
	})
	
	
	
	
	
	/* ドロップダウンメニュー */
	$(".dropdown-trigger").each(function(index, elem){
		var target = 'dropdown-menu-'+index;
		$(this).next('ul').attr({
			'id':target
		});
		$(this).attr({
			'data-target':target
		})
	
	});
	
	$(".dropdown-trigger").dropdown({
		 hover: false
		,belowOrigin: true
		,gutter:70
	});
	
	/* iframe 遅延読み込み */
	$('iframe[async]').each(function(index){
		var src = $(this).attr('src');
		$(this).attr({
			'data-src':src
			,'src':''
		});
		$(this).one('onAsyncLoadBgn', function(){
			var src = $(this).attr('data-src');
			$(this).attr({
				'data-src':''
				,'src':src
			});
		});
	});
	
	$(window).on('load', function(){
		setTimeout(function(){
			$('iframe[async]').trigger('onAsyncLoadBgn');
			
		}, 1000);
	});
	
	
	//フォーム関連
	
	$('select').formSelect();
	$('textarea').addClass('materialize-textarea');
	$('textarea').css({'minHeight':100});
	
	

	$(function(){
	
		//ページスクロール
		// #で始まるアンカーをクリックした場合に処理
		$('a[href="#page_top"]').on('click', function(ev) {
			// スクロールの速度
			var speed = 400; // ミリ秒
			// アンカーの値取得
			var href= $(this).attr("href");
			// 移動先を取得
			var target = $(href == "" ? 'html' : href);
			if(target.length == 0){
				target = $('html');
			}
			// 移動先を数値で取得
			var position = target.offset().top;
			// スムーススクロール
			$('body,html').animate({scrollTop:position}, speed, 'swing');
			
		});
		
		$(window).on('scroll', function(){
			if($(this).scrollTop() > 300){
				$('a[href="#page_top"]').css({'opacity':1});
			} else {
				$('a[href="#page_top"]').css({'opacity':0});
			}
		}).trigger('scroll');

	
	});

	
	

})(jQuery);
