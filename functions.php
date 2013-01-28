<?php
//jQuery Insert From Google
// if (!is_admin()) add_action("wp_enqueue_scripts", "load_cdn_jQuery", 11);
// function load_cdn_jQuery() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js");
//    wp_enqueue_script('jquery');
// }

// function my_scripts_method() {
// 	wp_enqueue_script('custom', get_template_directory_uri().'/js/script.min.js', array('jquery'), '5.5.0', true);
// }

// add_action('wp_enqueue_scripts', 'my_scripts_method');

// HIDE THE ADMIN BAR
function my_function_admin_bar(){
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


// Add Thumbnail support
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200,150);
add_image_size('project',200,150,true);