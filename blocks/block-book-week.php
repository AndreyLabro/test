<div data-xs="3" data-md="3" data-sm="3" data-lg="4" class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
<section class="mediaBlock -weekBook -withBg">
  <div class="mediaBlockInfo">
    <div class="mediaBlockInfo-category">Книги недели</div>
	
	<?php if( $id_one !== "" && $id_two !== "" && $id_three !== "" && $id_four !== "" && $id_five !== "" ) { ?>
    
    <?php query_posts(array( 'p' => $id_one, 'posts_per_page' => 1 ) ); ?>
	<?php while (have_posts()) : the_post(); ?>
    
    <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" class="mediaBlockInfo-img"></div>
    <div class="mediaBlockInfo-main">
      <div class="mediaBlock-weekBook-item"><a href="<?php the_permalink(); ?>" class="mediaBlock-weekBook-link"><?php the_title(); ?></a>
        <div class="mediaBlock-weekBook-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
      </div>
      
       <?php endwhile;  wp_reset_postdata(); ?>
       
    <?php query_posts(array( 'p' => $id_two, 'posts_per_page' => 1 ) ); ?>
	<?php while (have_posts()) : the_post(); ?>
      
      <div class="mediaBlock-weekBook-item"><a href="<?php the_permalink(); ?>" class="mediaBlock-weekBook-link"><?php the_title(); ?></a>
        <div class="mediaBlock-weekBook-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
      </div>
      
        <?php endwhile;  wp_reset_postdata(); ?>
        
            <?php query_posts(array( 'p' => $id_three, 'posts_per_page' => 1 ) ); ?>
	<?php while (have_posts()) : the_post(); ?>
      
      <div class="mediaBlock-weekBook-item"><a href="<?php the_permalink(); ?>" class="mediaBlock-weekBook-link"><?php the_title(); ?></a>
        <div class="mediaBlock-weekBook-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
      </div>
      
        <?php endwhile;  wp_reset_postdata(); ?>
        
            <?php query_posts(array( 'p' => $id_four, 'posts_per_page' => 1 ) ); ?>
	<?php while (have_posts()) : the_post(); ?>
      
      <div class="mediaBlock-weekBook-item"><a href="<?php the_permalink(); ?>" class="mediaBlock-weekBook-link"><?php the_title(); ?></a>
        <div class="mediaBlock-weekBook-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
      </div>
      
        <?php endwhile;  wp_reset_postdata(); ?>
        
            <?php query_posts(array( 'p' => $id_five, 'posts_per_page' => 1 ) ); ?>
	<?php while (have_posts()) : the_post(); ?>
      
      <div class="mediaBlock-weekBook-item"><a href="<?php the_permalink(); ?>" class="mediaBlock-weekBook-link"><?php the_title(); ?></a>
        <div class="mediaBlock-weekBook-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
      </div>
      
        <?php endwhile;  wp_reset_postdata(); ?>
		
		<?php } else { ?>
		
		<?php query_posts(array( 'cat' => 234, 'posts_per_page' => 1 ) ); ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);" class="mediaBlockInfo-img"></div>
    <div class="mediaBlockInfo-main">
      <div class="mediaBlock-weekBook-item"><a href="<?php the_permalink(); ?>" class="mediaBlock-weekBook-link"><?php the_title(); ?></a>
        <div class="mediaBlock-weekBook-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
      </div>
      		
		<?php endwhile;  wp_reset_postdata(); ?>
		
		<?php query_posts(array( 'cat' => 234, 'posts_per_page' => 4, 'offset' => 1 ) ); ?>
		<?php while (have_posts()) : the_post(); ?>
		
		 <div class="mediaBlock-weekBook-item"><a href="<?php the_permalink(); ?>" class="mediaBlock-weekBook-link"><?php the_title(); ?></a>
        <div class="mediaBlock-weekBook-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
      </div>
		
		<?php endwhile;  wp_reset_postdata(); ?>
		
		<?php } ?>
    
      

    </div>
  </div>
</section>
</div>