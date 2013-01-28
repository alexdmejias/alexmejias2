<!-- </div>end #cont -->
<footer>
	<a href="#header_content" id="to_top">Back to Top</a>
	<div id="share_menu">
		<h3>Social Links</h3>
		<ul id="share">
			<li><a href="https://twitter.com/alme1304" class="round twitter">twitter</a></li>
			<li><a href="https://github.com/amejias101" class="round github">github</a></li>
			<li><a href="http://www.behance.net/aleximejias" class="round behance">behance</a></li>
			<li><a href="https://plus.google.com/u/0/117004785307085745469/posts" class="round googleplus">googleplus</a></li>
			<li><a href="http://www.linkedin.com/pub/alex-mejias/54/987/361" class="round linkedin">linkedin</a></li>
		</ul>
	</div>
</footer>
<script type="text/javascript">
	var testing = false;

jQuery(document).ready(function($){
	$('aside nav').prepend('<div id="menu-icon">Projects</div>');
	$("#menu-icon").on("click", function(){
		$("#projects").slideToggle();
		$(this).toggleClass("active");
	});


	if(testing) {
		$(window).on('resize load',function() {
			if($('#size').length<1){
				$('body').append('<div id="size"></div>');
			}
			$('#size').text($(window).innerWidth() +' X '+$(window).innerHeight()).css({'position':'fixed','bottom':0,'right':0,'background-color':'red'});
		});
	}

	$(window).on('resize load',function() {
		var win_size= $(window).innerWidth();
		if (win_size<=480){
			$('header p a').text('cellphone').next().text('email');
		}
		else if(win_size>=481){
			$('header p a').text('(516) 784-6801').next().text('alexis@alexismejias.com');
		}
	});
});
</script>
</body>
</html>