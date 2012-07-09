<?php get_header(); ?>
<body><!-- index.php -->
	<div id="cont">
		<?php get_sidebar(); ?>
		<?php if(have_posts()): ?>
			<?php while (have_posts()): the_post();?>
				<section id="content">
					<h1 id="title"><?php wp_title("",true);?></h1>
					<?php the_content(''); ?>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
<!--===================END OF ACTUAL SECTIONS ===================-->
	</div>
<?php get_footer(); ?>