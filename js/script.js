var testing = false;

jQuery(document).ready(function($){

	/* prepend menu icon */
	$('aside nav').prepend('<div id="menu-icon">Projects</div>');
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("#projects").slideToggle();
		$(this).toggleClass("active");
	});


	if(testing) {
		$(window).on('resize load',function() {
			if($('#size').length<1){
				$('body').append('<div id="size"></div>');
			}
			$('#size').text($(window).innerWidth() +' X '+$(window).innerHeight()).css({'position':'absolute','bottom':0,'right':0,'background-color':'red'});
		});
	}

	$(window).on('resize load',function() {
		var win_size= $(window).innerWidth();
		if (win_size<=480){
			$('header p a').text('cellphone').next().text('email');
		}
		else if(win_size>=481){
			$('header p a').text('(516)784-6801').next().text('alexis@alexismejias.com');
		}


	});





});