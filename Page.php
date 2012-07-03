<?php  
/*
Template Name: Page 
*/
?>

<?php get_header(); ?>
<body><!-- Template:Page -->
	<div id="cont">
		<?php get_sidebar(); ?>
		<?php if(have_posts()): ?>
		<?php while (have_posts()): the_post();?>
		<div id="right">
            
			<div id="post">
				<h2 class="title"><?php wp_title("");?></h2>
				<div class="entry">
					<?php the_content(''); ?>
				</div><!-- END #ENTRY -->
				<?php endwhile; ?>
			<?php endif;?>
			</div><!-- END  #POST -->        
		</div><!-- END #RIGHT -->
<?php get_footer(); ?>