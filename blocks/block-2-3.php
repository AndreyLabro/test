<div class="col-sm-12 col-md-8 col-lg-6 grid-item ms-half">
    <section class="mediaBlock -default">
        
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
			<a href="<?php the_permalink(); ?>" style="color: #fff;" class="mediaBlockInfo-link-block"></a>
			<div id="mediaBlockMainInfoImg" style="background-image: url(<?php the_field('alt_img'); ?>); <?php if( get_field('edit_alignment') ) : echo 'background-position: ' ?><?php echo get_field('vertical_alignment') . ' ' . get_field('horizontal_alignment') . ' !important'; ?><?php endif; ?>" class="mediaBlockInfo-img"></div>
            
            	<?php if ( in_category(234) ) { ?>
            
            <a href="/reviews" class="mediaBlockInfo-category" style="color: #fff;">Рецензии</a>
			
			 <?php } elseif(in_category(210)) { ?>
			 
			 <a href="/context" class="mediaBlockInfo-category" style="color: #fff;">Контекст</a>
            
            	 <?php } elseif(!in_category(234) || !in_category(210) ) { ?>
                 
                  <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ) ?>"" class="mediaBlockInfo-category" style="color: #fff;"><?php echo $category[0]->cat_name; ?></a>
                  
                   <?php } ?>
            
          <div class="mediaBlockInfo-date" style="color: #fff;"><?php the_time( get_option( 'date_format' ) ); ?></div>
          <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" style="color: #fff;" class="mediaBlockInfo-title"><?php the_title(); ?></a>
            <div class="mediaBlockInfo-about" style="color: #fff;"><?php the_field('subtitle'); ?></div>
          </div>
        </div>
                
        <?php endwhile;  wp_reset_postdata(); endif; ?>
                
    </section>
</div>