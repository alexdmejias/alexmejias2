<?php get_header(); ?>
<body><!-- index.php -->
	<div id="cont"><!-- I think that this is useless -->
		<?php get_sidebar(); ?>
		<?php if(have_posts()): ?>
			<?php while (have_posts()): the_post();?>
				<section id="content">
					<h1 id="title"><?php wp_title("",true);?></h1>
					<?php the_content(''); ?>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>