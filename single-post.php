<?php get_header(); ?>
<div id="cont"><!-- I think that this is useless -->
	<?php get_sidebar(); ?>
	<section id="content">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<h2>
					<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> - <?php the_date(); ?></a>
				</h2>
				<?php wp_list_categories('title_li=&style=none'); ?>
				<?php the_tags(); ?>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
		<?php endif ?>
	</section>
</div>
<?php get_footer(); ?>