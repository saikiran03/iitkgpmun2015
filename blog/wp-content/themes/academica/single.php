<?php 
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
$dateformat = get_option('date_format');
$timeformat = get_option('time_format');
$template = get_post_meta($post->ID, 'wpzoom_post_template', true);
get_header(); ?>


<div id="content">
<div class="wrap">
    
	<div class="sep sepinside">&nbsp;</div>
	    
	<?php wp_reset_query();	if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php if ($template != 'Full Width (no sidebar)') { ?><div class="column column-narrow">&nbsp;</div><!-- end .column-narrow --><?php } ?>
	      
	<div class="column <?php if ($template != 'Full Width (no sidebar)') { echo"column-double";} else {echo"column-full";} ?> column-content column-last">
	      
		<h1><?php the_title(); ?></h1>
	      
	</div><!-- end .column-double -->

	<div class="clear">&nbsp;</div>
	
	<?php if ($template != 'Full Width (no sidebar)') { ?>
	<div class="column column-narrow">
	      
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar: Posts (Left)') ) : ?>&nbsp;<?php endif; ?>
	        
	</div><!-- end .column-narrow -->
	<?php } ?>
	      
	<div class="column <?php if ($template == 'Only Left Sidebar') {echo"column-double column-last ";} if ($template == 'Full Width (no sidebar)') {echo"column-full column-last ";} ?>column-content single">
	
		<?php the_content(''); ?>

		<?php wp_link_pages(array('before' => '<p class="pages"><strong>'.__('Pages', 'wpzoom').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		<?php the_tags( '<p class="tags"><strong>'.__('Tags', 'wpzoom').':</strong> ', ', ', '</p>'); ?>

		<p class="postmetadata"><?php _e('By','wpzoom');?> <?php the_author_posts_link(); ?> <?php _e('in','wpzoom');?> <span class="category"><?php the_category(', '); ?></span> <?php _e('on','wpzoom');?> <span class="datetime"><?php the_time("$dateformat"); ?></span><?php edit_post_link( __('EDIT', 'wpzoom'), ' / ', ''); ?></p>
		<?php comments_template(); ?>
	      
	</div><!-- end .column-content -->
	
	<?php if ($template != 'Only Left Sidebar' && $template != 'Full Width (no sidebar)') { ?><div class="column column-narrow column-last">
	      
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar: Posts (Right)') ) : ?>&nbsp;<?php endif; ?>
	      
	</div><!-- end .column-narrow -->
	<?php } ?>
	
	<?php endwhile; endif; ?>
	
	<div class="clear">&nbsp;</div>

</div><!-- end .wrap -->
</div><!-- end #content -->

<?php get_footer(); ?>