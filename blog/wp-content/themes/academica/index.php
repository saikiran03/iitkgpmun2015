<?php 
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
get_header(); ?>


<?php if (is_home() && $wpzoom_slideshow_show == 'Yes') { include(TEMPLATEPATH . '/wpzoom_showcase.php'); }

else
{
	?><div class="wrap"><div class="sep">&nbsp;</div></div><?php 
}
?>

<div id="content">
<div class="wrap">
    
	<div class="column column-narrow">&nbsp;</div><!-- end .column-narrow -->
	      
	<div class="column column-double column-content column-last">
	      
	<?php 
	
	$pagid = $wpzoom_featured_page_1;
	if ($pagid > 0)
	{

	query_posts("page_id=$pagid&showposts=1");
					
	//The Loop
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<h1><?php the_title(); ?></h1>
	      
	</div><!-- end .column-double -->

	<div class="clear">&nbsp;</div>
	
	<div class="column column-narrow">
	      
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar: Homepage (Left)') ) : ?>&nbsp;<?php endif; ?>
	        
	</div><!-- end .column-narrow -->
	      
	<div class="column column-content">
	      
		<?php the_content(''); ?>
		<p class="postmetadata"><?php edit_post_link(__('Edit this page', 'wpzoom'),'',''); ?></p>
		        
		<?php endwhile; endif;
		}
		else
		{
		?>
		
		<h1><?php bloginfo('name'); ?></h1>
	      
	</div><!-- end .column-double -->
	
	<div class="clear">&nbsp;</div>
	
	<div class="column column-narrow">
	      
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar: Homepage (Left)') ) : ?>&nbsp;<?php endif; ?>
	        
	</div><!-- end .column-narrow -->
	      
	<div class="column column-content">
	
		<p>Thank you for using Academica Theme by <a href="http://www.wpzoom.com">WPZOOM</a></p>
		<p>Please go to <strong>WPZOOM Theme Options > Homepage Options</strong> and select a <strong>static page</strong> or disable this block if it is unnecessarry.</p>
		
		<?php } ?>
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar: Homepage (Middle)') ) : ?>&nbsp;<?php endif; ?>
	        
	</div><!-- end .column-content -->
	      
	<div class="column column-narrow column-last">
	      
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar: Homepage (Right)') ) : ?>&nbsp;<?php endif; ?>
	      
	</div><!-- end .column-narrow -->
	
	<div class="clear">&nbsp;</div>

</div><!-- end .wrap -->
</div><!-- end #content -->
  
<?php get_footer(); ?>
