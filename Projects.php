<?php get_header(); ?>
<!-- template:Projects -->
	<div id="cont">
		<div id="all_projects">
			<?php $args = array(
			    'child_of' => 2,
			    'sort_column' => 'menu_order'
			); ?>
			<?php $pages = get_pages($args); ?>
			<ul>
			    <?php foreach ($pages as $page): ?>
			        <li>
			        	<a href="<?php echo get_page_link($page->ID) ?>">
			            	<p><?php echo $page->post_title; ?></p>
			            	<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
			            </a>
			        </li>
			    <?php endforeach; ?>
			</ul>
		</div>
	</div><!-- end of #cont -->
<?php get_footer(); ?>

