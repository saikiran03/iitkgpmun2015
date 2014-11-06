<?php 

/*-----------------------------------------------------------------------------------*/
/* WPZOOM Admin Panel & Theme Features												 */
/*-----------------------------------------------------------------------------------*/
 
 
/*----------------------------------*/
/* Localization						*/
/*----------------------------------*/

load_theme_textdomain( 'wpzoom', TEMPLATEPATH.'/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH."/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);

/*----------------------------------*/
/* Custom Menus						*/
/*----------------------------------*/

if (function_exists('register_nav_menus')) {
register_nav_menus( array(
		'primary' => __( 'Top Menu', 'wpzoom' ),
		'secondary' => __( 'Bottom Menu', 'wpzoom' ),
	) );
}

/*----------------------------------*/
/* Featured Image					*/
/*----------------------------------*/

if ( function_exists( 'add_theme_support'  ) ) { 

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 120, true ); // Normal post thumbnails
add_image_size( 'homecat', 9999, 175 ); // Permalink thumbnail size

}
	
/*----------------------------------*/
/* Custom Background				*/
/*----------------------------------*/

if ( function_exists( 'add_custom_background'  ) ) { 
// This theme allows users to set a custom background. Added in 3.0
add_custom_background();
}


/*----------------------------------*/
/* WPZOOM RSS						*/
/*----------------------------------*/

function wpzoom_rss()
{	 global $wpzoom_misc_feedburner;
    if (strlen($wpzoom_misc_feedburner) < 1) {
        bloginfo('rss2_url');
    } else {
        echo $wpzoom_misc_feedburner;
    }
}

/*----------------------------------*/
/* WPZOOM js						*/
/*----------------------------------*/

function wpzoom_js()
{
    $args = func_get_args();
    foreach ($args as $arg) {
        echo '<script type="text/javascript" src="' . get_bloginfo('template_directory') . '/js/' . $arg . '.js"></script>' . "\n";
    }
}


/*--------------------------------------*/
/* Initializing WPZOOM Theme Options 	*/
/*--------------------------------------*/

 if (is_admin() && $_GET['activated'] == 'true') {
header("Location: admin.php?page=wpzoom_options");
}


if (is_admin() && $_GET['page'] == 'wpzoom_options') {
	add_action('admin_head', 'wpzoom_admin_css');
	// wp_enqueue_script('jquery');
	wp_enqueue_script('tabs', get_bloginfo('template_directory').'/wpzoom_admin/simpletabs.js');
}

function wpzoom_admin_css() {
	echo '
	<link rel="stylesheet" type="text/css" media="screen" href="'.get_bloginfo('template_directory').'/wpzoom_admin/options.css" />
	';
}
 
$functions_path = TEMPLATEPATH . '/wpzoom_admin/';
require_once ($functions_path . 'admin_functions.php');
$homepath = get_bloginfo('template_directory');

add_action('admin_menu', 'wpzoom_add_admin');



/* Custom Posts Types for Slideshow  */
add_action('init', 'slideshow_register');

function slideshow_register() {
	$labels = array(
		'name' => _x('Slideshow', 'post type general name'),
		'singular_name' => _x('Slideshow Item', 'post type singular name'),
		'add_new' => _x('Add a New Slide', 'slideshow item'),
		'add_new_item' => __('Add New Slideshow Item'),
		'edit_item' => __('Edit Slideshow Item'),
		'new_item' => __('New Slideshow Item'),
		'view_item' => __('View Slideshow Item'),
		'search_items' => __('Search Slideshow'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
 		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','editor','thumbnail', 'excerpt', 'custom-fields')
	  ); 
 
	register_post_type( 'slideshow' , $args );
}

function admin_init(){
 	add_meta_box("faq_excerpt", "Important Notices", "faq_excerpt_completed", "slideshow", "side", "high");
 }
  
function faq_excerpt_completed(){
  global $post;
  $custom = get_post_custom($post->ID);
  $faq_excerpt_completed = $custom["faq_excerpt_completed"][0];
  ?>
    <p>If you get a <strong>404 Error</strong> when trying to view a post from slideshow, simply access <a href='options-permalinks.php' target='_blank'>Permalinks</a> section, and this will fix the problem.<br/><br/>
    <em>Example of call-to-action button:</em> <br /><br /><code><?php print(htmlentities('<a class="button" href="your-url"><span></span>Learn More</a>')); ?></code></p>
  <?php
}

function save_details(){
  global $post;
  update_post_meta($post->ID, "faq_excerpt_completed", $_POST["faq_excerpt_completed"]);
   }
?>