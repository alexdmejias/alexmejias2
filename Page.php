<?php get_header(); ?>
this is the page.php file
<div id="cont"><!-- I think that this is useless -->
	<section id="content">
	<?php get_sidebar(); ?>

	<?php if(is_page('blog') || is_page('blog-2')): ?>
		blog psots will go here
	<?php endif; ?>

	<?php if(is_page('about')): ?>
		<?php the_post();?>
		<h1 id="title"><?php wp_title("",true);?></h1>
		<?php the_content(''); ?>
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
	<?php endif; ?>
	</section>
</div>
<?php get_footer(); ?>