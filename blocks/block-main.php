<div class="col-xs-12 grid-item">
<section class="mediaBlock mediaBlock-main">
<div class="row">
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
	
	<div class="col-md-8 col-lg-9">
	<div class="mediaBlockInfo">
		<a href="<?php the_permalink(); ?>" style="color: #fff;" class="mediaBlockInfo-link-block"></a>
					<div id="mediaBlockMainInfoImg" style="left: -121.5px; background-image: url(<?php the_field('alt_img'); ?>); <?php if( get_field('edit_alignment') ) : echo 'background-position: ' ?><?php echo get_field('vertical_alignment') . ' ' . get_field('horizontal_alignment') . ' !important'; ?><?php endif; ?>" class="mediaBlockInfo-img"></div>
	  
	  <?php if ( !in_category(210) ) { ?>
	
	<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ) ?>" class="mediaBlockInfo-category"><?php echo $category[0]->cat_name; ?></a>
	
	 <?php } else { ?>
	 
	 <a href="<?php echo esc_url( get_category_link( $category[1]->term_id ) ) ?>" class="mediaBlockInfo-category"><?php echo $category[1]->cat_name; ?></a>
	 
	  <?php } ?>
	  
					<div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
					<div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title">
					  <span><q><?php the_title(); ?></q></span></a>
					  <div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
					</div>
	  </div>
	</div><?php endwhile;  wp_reset_postdata(); endif; ?>
	
	<div class="col-md-4 col-lg-3">
	  <div class="readMore">
		<div class="readMore-title">Читайте также</div>
		<div class="row readMore-list" style="position: relative; height: 334px;">
		  
		  <?php $args = array('posts_per_page' => 1, 'p' => $id_one); $the_query = new WP_Query($args); ?>
    	  <?php if ( $the_query->have_posts() ) : ?>
		  <?php while ( $the_query->have_posts() && $id_one !== ''  ) : $the_query->the_post(); ?>
		  
		  <div class="col-xs-12 col-sm-6 col-md-12 readMore-item" style="position: absolute; left: 0px; top: 0px;"><a href="<?php the_permalink(); ?>" class="readMore-link"><?php the_title(); ?></a>
		  <div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
			<div class="readMore-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
		  </div>
		  
		  <?php endwhile;  wp_reset_postdata(); endif; ?>
		  
		  <?php $args = array('posts_per_page' => 1, 'p' => $id_two); $the_query = new WP_Query($args); ?>
    	  <?php if ( $the_query->have_posts() && $id_two !== '' ) : ?>
		  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		  
		  <div class="col-xs-12 col-sm-6 col-md-12 readMore-item" style="position: absolute; left: 0px; top: 86px;"><a href="<?php the_permalink(); ?>" class="readMore-link"><?php the_title(); ?></a>
		  <div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
			<div class="readMore-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
		  </div>
		  
		  <?php endwhile;  wp_reset_postdata(); endif; ?>
		  
		  <?php $args = array('posts_per_page' => 1, 'p' => $id_three); $the_query = new WP_Query($args); ?>
    	  <?php if ( $the_query->have_posts() && $id_three !== ''  ) : ?>
		  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		  
		  <div class="col-xs-12 col-sm-6 col-md-12 readMore-item" style="position: absolute; left: 0px; top: 196px;"><a href="<?php the_permalink(); ?>" class="readMore-link"><?php the_title(); ?></a>
		  <div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
			<div class="readMore-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
		  </div>
		  
		   <?php endwhile;  wp_reset_postdata(); endif; ?>
		   
		  
		</div>
	  </div>
	</div>
  
	
</div>
</section>
</div>
