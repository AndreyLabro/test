    <?php
		global $post;
        $args = array(
            'posts_per_page' => 1,
            'p' => $text
        );
        
        $the_query = new WP_Query($args);
		
    ?>
    
    <?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?><div 
			class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
<section	class="mediaBlock -withBg -lighten<?php if ( in_category( CAT_OLDBOOK ) ) echo ' -newBook -oldBook';?>">

    
    <?php
        $category = get_the_category();
		#	Взять Primary category
		#	Если таковой нет, то первую попавшуюся
		$primary_cat = ( int )get_post_meta( $post->ID, '_yoast_wpseo_primary_category', true );
		$primary_cat = $primary_cat ? get_term( $primary_cat ) : get_term( $category[0] ) ;
		
		$link = in_category( CAT_OLDBOOK ) ? '' : sprintf( 'href="%s" ', get_category_link( $primary_cat->term_id ) );
		$anchor = in_category( CAT_OLDBOOK ) ? get_term_field( 'name', CAT_OLDBOOK ) : $primary_cat->name ;
		$nohover = in_category( CAT_OLDBOOK ) ? ' nohover' : '';
		$date = in_category( CAT_OLDBOOK ) ? get_field( 'old_book__date', $post->ID ) : get_the_time( get_option( 'date_format' ) );
    ?>

    <div class="mediaBlockInfo <?php echo $primary_cat->slug . ' ' . $post->ID; ?>">
	<a href="<?php the_permalink(); ?>" style="color: #fff;" class="mediaBlockInfo-link-block"></a>
		<div style="background-image: url(<?php the_post_thumbnail_url('full'); ?>); <?php if( get_field('edit_alignment') ) : echo 'background-position: ' ?><?php echo get_field('vertical_alignment') . ' ' . get_field('horizontal_alignment') . ' !important'; ?><?php endif; ?>" class="mediaBlockInfo-img"></div><a <?php echo $link; ?>class="mediaBlockInfo-category<?php echo $nohover; ?>"><?php echo $anchor; ?></a>
		<?php if( get_field('partners') ) : ?>
		<div class="partner-block">
			<label class="partner-label">Партнерский материал</label>
			
		</div>
		<?php endif; ?>
        <div class="mediaBlockInfo-date"><?php echo $date; ?></div>
        <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title md-size"><?php the_title(); ?></a>
        <div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
        </div>
    </div>
    
      <?php endwhile;  wp_reset_postdata(); endif; ?>
    
</section>
</div>
