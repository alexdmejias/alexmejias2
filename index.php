<?php get_header(); ?>
<body><!-- index.php -->
	<div id="cont">
		<?php get_sidebar(); ?>
		<?php if(have_posts()): ?>
		<?php while (have_posts()): the_post();?>
		<div id="right">
            
			<div id="summary">
				<h1><?php wp_title();?></h1>
				<?php the_content(''); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
				
				
			<div id="content"></div>				
                
<!--===================END OF ACTUAL SECTIONS ===================-->            
		</div>
<?php get_footer(); ?>