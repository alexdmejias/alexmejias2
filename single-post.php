<?php get_header(); ?>
<div id="cont">
	<?php get_sidebar(); ?>
	<section id="content" class="narrow_main">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<h2>
					<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> - <?php the_date(); ?></a>
				</h2>
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail(' '); ?>
				<?php endif; ?>
				<p>Categories: <?php the_category(' '); ?></p>
				<?php the_tags(); ?>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
		<?php endif ?>
	</section>
</div>
<?php get_footer(); ?>