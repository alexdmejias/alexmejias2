<?php 
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<div id="content">
		<?php if(have_posts()): ?>
		<?php while (have_posts()):the_post(); ?>

		<?php the_content(''); ?>

		<div id="contact">
			<form action="#" method="post">
				<fieldset>
					<label for="name">Name:</label>
					<input type="text" id="name" placeholder="Enter your full name">

					<label for="email">Email:</label>
					<input type="email" id="email" placeholder="Enter your email">

					<label for="message">Message:</label>
					<textarea id="message" cols="30" rows="10" placeholder="whats on your mind?"></textarea>

					<input type="submit" value="Send message">					
				</fieldset>
			</form>
		</div><!-- #contact -->
		<div id="social">
			<h2>My social profiles</h2>
			<p>some message</p>
			<ul>
				<li><a href="#">twitter</a></li>
				<li><a href="#">github</a></li>
				<li><a href="#">digg</a></li>
				<li><a href="#"></a></li>
			</ul>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>