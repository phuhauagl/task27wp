$(document).ready(function(){
	$('.js-slider').bxSlider({
		infiniteLoop : true,
		pager : false,
		auto : true

	});

	$('.js-imglink').each(function(){
		var src_no = $(this).attr('src');
		var src_on = src_no.replace('_no.', '_on.');
		$(this).mouseover(function(){
			$(this).attr('src',src_on); 
		});
		$(this).mouseout(function(){
			$(this).attr('src',src_no); 
		});
	});
	
	var path = window.location.href;
	$('.c-gnav li a').each(function(){
		if(this.href === path){
			$(this).parent().addClass('active');
		}
	})

	
});

