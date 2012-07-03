jQuery(document).ready(function($){

	/* prepend menu icon */
	$('#nav-wrap').prepend('<div id="menu-icon"></div>');
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("#nav").slideToggle();
		$(this).toggleClass("active");
	});

	$(window).on('resize load',function() {
		if($('#size').length<1){
			$('body').append('<div id="size"></div>');
		}
		$('#size').text($(window).innerWidth() +' X '+$(window).innerHeight()).css({'position':'absolute','bottom':0,'right':0,'background-color':'red'});
	});

});