    <?php
        $args = array(
            'posts_per_page' => 1,
            'p' => $text,
			'cat' => 234
			
        );
        
        $the_query = new WP_Query($args);
    ?>
    
    <?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
    <?php
        $category = get_the_category( $custompost );
    ?>
	
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
              <section class="mediaBlock -newBook -withBg -lighten">
                <div class="mediaBlockInfo">
                  <div class="mediaBlockInfo-category">Новая книга</div>
                  <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                  <div style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);" class="mediaBlockInfo-img"></div>
                  <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title"><?php the_title(); ?></a></div>
                </div>
				
				  <?php endwhile;  wp_reset_postdata(); endif; ?>
              </section>
            </div>
            
