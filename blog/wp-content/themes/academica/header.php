<?php 
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (strlen($wpzoom_misc_favicon) > 1 ) { ?><link rel="shortcut icon" href="<?php echo "$wpzoom_misc_favicon";?>" type="image/x-icon" /><?php } ?>
<title><?php if ($wpzoom_seo_enable == 'Enable') { wpzoom_titles(); } else { wp_title('-'); echo ' | '; bloginfo('name'); } ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if ($wpzoom_seo_enable == 'Enable') { 
if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<?php meta_post_keywords(); ?>
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php if (strlen($wpzoom_meta_desc) < 1) { bloginfo('description');} else {echo"$wpzoom_meta_desc";}?>" />
<?php meta_home_keywords(); ?>
<?php endif; ?>
<?php wpzoom_index(); ?>
<?php wpzoom_canonical(); } ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/custom.css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php if (strlen($wpzoom_misc_feedburner) < 10) { bloginfo('rss2_url');} else {echo"$wpzoom_misc_feedburner";} ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script('jquery');  ?>
<?php wp_head(); ?>
<script type='text/javascript'>  
jQuery(document).ready(function() {   
jQuery("#menuhead ul").css({display: "none"}); // Opera Fix  
jQuery("#menuhead li").hover(function(){  
        jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268);  
        },function(){  
        jQuery(this).find('ul:first').css({visibility: "hidden"});  
        });  
});  
</script>
     
<?php if (is_home() && $wpzoom_slideshow_show == 'Yes') { ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/nivo-slider.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/nivo.core.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/nivo.slider.js" type="text/javascript"></script>
<?php } ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap">
  
	<div id="mainNav">
		<div class="wrap">
		
			<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class' => '', 'menu_id' => 'menuhead', 'sort_column' => 'menu_order', 'theme_location' => 'primary' ) ); ?>
		      
		</div><!-- end .wrap -->
	</div><!-- end #mainNav -->
  
	<div id="crumbs">
		<div class="wrap">
			<p><?php wpzoom_breadcrumbs(); ?></p>
		</div><!-- end .wrap -->
	</div>
	
	<div id="header">
		<div class="wrap">
			<div id="logo"><a href="<?php echo get_option('home'); ?>"><?php if ($wpzoom_misc_logo_path) { ?><img src="<?php echo "$wpzoom_misc_logo_path";?>" alt="<?php bloginfo('name'); ?>" /><?php } else { ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /><?php } ?></a></div>
			<div id="search"> 
				<form method="get" action="<?php echo get_option('home'); ?>">
					<input type="text" name="s" id="setop" onblur="if (this.value == '') {this.value = '<?php _e('Search', 'wpzoom'); ?>';}" onfocus="if (this.value == '<?php _e('search','wpzoom');?>') {this.value = '';}" value="<?php _e('search','wpzoom');?>" />
					<input type="submit" id="searchsubmittop" class="submit" value="<?php _e('search','wpzoom');?>" />
				</form>  
			</div><!-- end #search -->
			<?php include(TEMPLATEPATH . '/wpzoom_social.php'); // calling social block ?>
			<div class="clear">&nbsp;</div>
		</div><!-- end .wrap -->
	</div><!-- end #header -->