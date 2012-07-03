<?php
//jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_register_script('script', get_template_directory_uri().'/js/script.js');
   wp_enqueue_script('jquery');
   wp_enqueue_script('script');

}

// HIDE THE ADMIN BAR
function my_function_admin_bar(){
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


// Add Thumbnail support
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200,200);
add_image_size('project',200,150,true);
?>