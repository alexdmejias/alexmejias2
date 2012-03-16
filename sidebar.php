<div id="left">
	<a href="<?php bloginfo('wpurl'); ?>"><h1>Alex Mejias</h1></a>
	<p class="email"><a href="mailto:alexis@alexismejias.com">alexis@alexismejias.com</a></p>
	<p class="telephone">1(516)784-6801</p>
	<div id="nav">
		<ul>
			<?php 
				wp_list_pages('depth=0&exclude=10&sort_column=menu_order&title_li=');
				?>
		</ul>

		<ul class="other">
			<li><a href="http://alexismejias.com/resume.pdf">Resume</a></li>
			<li><a href="http://blog.alexismejias.com/">Blog</a></li>
		</ul>

	</div>
</div>