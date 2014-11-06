<div id="homeGallery">
<div class="wrap">

	<div id="showcase">
	    
		<?php $loop = new WP_Query( array( 'post_type' => 'slideshow', 'posts_per_page' => $wpzoom_slideshow_num ) ); ?>
		            
		<?php while ( $loop->have_posts() ) : $loop->the_post();
	
		unset($img,$link);
		if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
			$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
			$img = $thumbURL[0]; 
		}
		else { 
			$img = catch_that_image($post->ID); 
		}
		
		if ($img) { 
	
			$link = get_post_meta($post->ID, 'wpzoom_slide_url', true);
			$img = wpzoom_wpmu($img);
			
			if (strlen($link) > 1)
			{
				?><a href="<?php echo $link;?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?h=300&amp;w=960&amp;zc=1&amp;src=<?php echo $img; ?>" height="300" width="960" alt="" /></a><?php 
			}
			else
			{
				?><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?h=300&amp;w=960&amp;zc=1&amp;src=<?php echo $img; ?>" height="300" width="960" alt="" /><?php 
			}
		}
	
		endwhile; ?>
	    
	</div><!-- end #showcase -->

</div><!-- end .wrap -->
</div><!-- end #homeGallery -->