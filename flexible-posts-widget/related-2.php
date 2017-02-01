<?php
/**
 * Flexible Posts Widget: Old Default widget template
 * 
 * @since 1.0.0
 *
 * This is the ORIGINAL default template used by the plugin.
 * There is a new default template (default.php) that will be 
 * used by default if no template was specified in a widget.
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;

if ( !empty($title) )
	echo $before_title . $title . $after_title;

if( $flexible_posts->have_posts() ):
?>
	<div class="hidden-xs col-sm-4">
                    <div class="readMore">
                      <div class="readMore-title">Читайте также</div>
                      <div class="readMore-list" style="position: relative; height: 166px;">
						
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
		
		<div class="readMore-item"><a href="<?php echo the_permalink(); ?>" class="readMore-link"><?php the_title(); ?></a>
        <div class="readMore-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
        </div>
		
	<?php endwhile; ?>
	   </div>
    </div>
    </div>
	
	
						
                       
                        
                   
	
	
<?php else: // We have no posts ?>
	<div class="dpe-flexible-posts no-posts">
		<p><?php _e( 'No post found', 'flexible-posts-widget' ); ?></p>
	</div>
<?php	
endif; // End have_posts()
	
echo $after_widget;
