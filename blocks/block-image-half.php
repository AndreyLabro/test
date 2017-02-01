<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
<section class="mediaBlock -context">
    
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
    
    <div class="mediaBlockInfo">
		<a href="<?php the_permalink(); ?>" style="color: #fff;" class="mediaBlockInfo-link-block"></a>
        <div style="background-image: url(<?php the_post_thumbnail_url('full'); ?>); <?php if( get_field('edit_alignment') ) : echo 'background-position: ' ?><?php echo get_field('vertical_alignment') . ' ' . get_field('horizontal_alignment') . ' !important'; ?><?php endif; ?>" class="mediaBlockInfo-img"></div>
	
		<?php if ( in_category(234) ) { ?>
	
	<a href="/reviews" class="mediaBlockInfo-category">Рецензии</a>
	
	 <?php } elseif(in_category(210)) { ?>
	 
	 <a href="/context" class="mediaBlockInfo-category">Контекст</a>
	
	 <?php } elseif(!in_category(234)) { ?>
	 
	 <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ) ?>" class="mediaBlockInfo-category"><?php echo $category[0]->cat_name; ?></a>
	 
	  <?php } ?>
       <?php if( get_field('partners') ) : ?>
		<div class="partner-block">
			<label class="partner-label">Партнерский материал</label>
			
		</div>
		<?php endif; ?>
        <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
        <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title md-size"><?php the_title(); ?></a>
        <div class="mediaBlockInfo-about md-size"><?php the_field('subtitle'); ?></div>
        </div>
    </div>
    
       <?php endwhile;  wp_reset_postdata(); endif; ?>
    
</section>
</div>