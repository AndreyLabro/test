<div data-xs="4" data-md="8" data-sm="8" data-lg="7" class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
              <section class="mediaBlock -longBlock">
                            
                                
    <?php
        $args = array(
            'posts_per_page' => 1,
            'p' => $text
        );
        
        $the_query = new WP_Query($args);
    ?>
    
    <?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
    <?php
        $category = get_the_category( $custompost );
    ?>
                            
                <div class="mediaBlockInfo mediaBlockInfo-default">
                  <div style="background-image: url(img/ex_9.jpg);" class="mediaBlockInfo-img"></div>
                  
                  <?php if ( !in_category(210) ) { ?>
              <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" class="mediaBlockInfo-img"></div><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ) ?>" class="mediaBlockInfo-category"><?php echo $category[0]->cat_name; ?></a>
    <?php } else { ?>
              <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" class="mediaBlockInfo-img"></div><a href="<?php echo esc_url( get_category_link( $category[1]->term_id ) ) ?>" class="mediaBlockInfo-category"><?php echo $category[1]->cat_name; ?></a>
    <?php } ?>
		
                  
                  <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                  <div style="" class="mediaBlockInfo-img"></div>
                  <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title"> <span><?php the_title(); ?></span></a>
                    <div class="mediaBlockInfo-about"><?php the_excerpt(); ?></div>
                  </div>
                </div>
                
                <?php endwhile;  wp_reset_postdata(); endif; ?>
                
              </section>
            </div>