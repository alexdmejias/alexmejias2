<?php get_header(); ?>
<div id="cont"><!-- I think that this is useless -->
	<?php get_sidebar(); ?>
	<section id="content">

	<?php if(is_page('blog') || is_page('blog-2')): ?>
		<?php query_posts( 'posts_per_page=5' ); ?>
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<h2>
					<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> - <?php the_date(); ?></a>
				</h2>
				<?php the_category(' '); ?>
				<p><?php the_excerpt(); ?></p>
				<?php the_tags(); ?>
			<?php endwhile; ?>
		<?php endif ?>

	<?php elseif(is_page('about')): ?>
		<?php the_post();?>
		<article>
			<h1 id="title"><?php wp_title("",true);?></h1>
			<?php the_content(''); ?>
		</article>
		<?php $projects = get_github_activity(4); ?>
		<h2>Some recent Github activity</h2>
		<?php if(!empty($projects)): ?>
			<ul>
				<?php for($i = 0; count($projects) > $i; $i++): ?>
					<li class="repo">
						<a href="<?php echo $projects[$i]->html_url ?>" target="_blank" class="repo_link"> <?php echo $projects[$i]->name ?></a>
						<span>(<?php echo $projects[$i]->language; ?>)</span>
						<?php if(!empty($projects[$i]->description)): ?>
							<span class="repo_desc"> - <?php echo $projects[$i]->description ?></span>
						<?php else: ?>
							<span class="repo_desc"> - No Description</span>
						<?php endif; ?>
						<p class="repo_updated">last updated on <?php echo date('m/d',strtotime($projects[$i]->updated_at)) ?></p>
					</li>
				<?php endfor; ?>
			</ul>
		<?php endif; ?>

	<?php else: ?>
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<article>
					<h1 id="title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif ?>
	</section>
</div>
<?php get_footer(); ?>