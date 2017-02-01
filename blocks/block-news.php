<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
<section class="newsBlock">
			  
			  <div class="newsBlock-title">Новости</div><a href="/news" class="newsBlock-allNews">Все новости</a>
			  
			  <?php 
					query_posts(array( 
						'post_type' => 'news',
						'paged' => $paged,
						'posts_per_page' => 4
					) );  
				?>
				
			  <?php while (have_posts()) : the_post(); ?>
			  
			  <div class="newsBlock-item"><a href="<?php the_permalink(); ?>" class="newsBlock-link"><?php the_title(); ?></a>
			  <div class="newsBlock-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
              </div>
			  
			  <?php endwhile; wp_reset_query(); ?>
              
</section>
</div>