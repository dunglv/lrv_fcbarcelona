$(function(){
	var $init = $('.a-nit>a');
	var cclick = 0;

	$init.on('click', function(event){
		var $in_init = $(this).parent().find('.sub-menu-ver');
		// alert($in_init);
		if($in_init.length > 0){
			$('.sub-menu-ver').removeClass('_expand');
			if(!$in_init.hasClass('_expand')){
				$in_init.addClass('_expand');
			}
		}
		
		event.preventDefault(); 
	});

	var $add_tag = $('.add-tag');
	var $a_w_tag = $('.add-wrap-tag');
	var $in_tag = $('.e-tag');
	var id = 1;
	$add_tag.on('click', function(){
		$in_tag.focus();
	});

	$in_tag.on('keyup', function(e){
		if(e.keyCode == 188){
			// alert();
			$a_w_tag.append('<span id="n_tg_'+id+'" class="n-tg">'+$in_tag.val().replace(',', '').trim()+'<i class="_t_close fa fa-times"></i></span>');
			$in_tag.val('').focus();
			var $remove_tag = $('._t_close');
			$remove_tag.on('click', function(e){
				var $rmt_t = $(this).parents();
				// alert($rmt_t.attr('class'));
				$('#'+$rmt_t.attr('id')).remove();
			});
			id++;
		}
	});

	
});