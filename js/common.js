(function($) {
	$('#mobile-side-manu').sidenav();
	$('a[href="#sidenav_close"]').on('click', function(ev){
		ev.preventDefault();
		$('.sidenav-overlay').trigger('click');
	})
	
	
	
	
	
	/* �h���b�v�_�E�����j���[ */
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
	
	/* iframe �x���ǂݍ��� */
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
	
	
	//�t�H�[���֘A
	
	$('select').formSelect();
	$('textarea').addClass('materialize-textarea');
	$('textarea').css({'minHeight':100});
	
	

	$(function(){
	
		//�y�[�W�X�N���[��
		// #�Ŏn�܂�A���J�[���N���b�N�����ꍇ�ɏ���
		$('a[href="#page_top"]').on('click', function(ev) {
			// �X�N���[���̑��x
			var speed = 400; // �~���b
			// �A���J�[�̒l�擾
			var href= $(this).attr("href");
			// �ړ�����擾
			var target = $(href == "" ? 'html' : href);
			if(target.length == 0){
				target = $('html');
			}
			// �ړ���𐔒l�Ŏ擾
			var position = target.offset().top;
			// �X���[�X�X�N���[��
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
