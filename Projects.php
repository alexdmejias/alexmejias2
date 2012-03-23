<?php  
/*
Template Name: Projects 
*/
?>

<?php get_header(); ?>
<body>
	<div id="cont">
		<?php get_sidebar(); ?>

		<div id="right">
			<div id="projects">
				<?php //$pages = get_pages(array('child_of' => 7)); ?> 
				<?php $args = array(
				    'child_of' => 7,
				    'sort_column' => 'menu_order'
				); ?> 

				<?php $pages = get_pages($args); ?> 
				<ul>
				    <?php foreach ($pages as $page): ?>
				        <li>
				        	<a href="<?php echo get_page_link($page->ID) ?>">
				            	<?php echo get_the_post_thumbnail($page->ID, 'project'); ?>
				            	<p><?php echo $page->post_title; ?></p>
				            </a>
				        </li>
				    <?php endforeach; ?>
				</ul>
			</div>
			</div>
                
<!--===================END OF ACTUAL SECTIONS ===================-->            
		</div>
<?php get_footer(); ?>

