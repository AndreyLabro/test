<div id="importantMediaBlock" class="col-xs-12 col-sm-12 col-md-8 col-lg-6 grid-item">
              <section class="mediaBlock -withReadMore -withBg -lighten">
                <div class="row">
                  <div class="col-sm-6">
                    
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
                      <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>); <?php if( get_field('edit_alignment') ) : echo 'background-position: ' ?><?php echo get_field('vertical_alignment') . ' ' . get_field('horizontal_alignment') . ' !important'; ?><?php endif; ?>" class="mediaBlockInfo-img"></div>
                   <?php if ( in_category(234) ) { ?>
	
	<a href="/reviews" class="mediaBlockInfo-category">Рецензии</a>
	
	 <?php } elseif(!in_category(234)) { ?>
	 
	 <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ) ?>" class="mediaBlockInfo-category">Рецензии</a>
	 
	  <?php } ?>
                    
                      <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                      <div class="mediaBlockInfo-main">
							<a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title"><?php the_title(); ?></a>
							<div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
					  </div>
                    </div>
                    
                    <?php endwhile;  wp_reset_postdata(); endif; ?>
                    
                  </div>
                  <div class="col-sm-6 rmk">
                    <div class="readMore">
                      <div class="readMore-title">Читайте также</div>
                      <div class="readMore-list" style="position: relative; height: 210px;">
                        
                        <?php $args = array('posts_per_page' => 1, 'p' => $id_one); $the_query = new WP_Query($args); ?>
                        <?php if ( $the_query->have_posts()) : ?>
                        <?php while ( $the_query->have_posts() && $id_one !== '' ) : $the_query->the_post(); ?>
                        
                        <div class="readMore-item" style="position: absolute; left: 0px; top: 0;"><a href="<?php the_permalink(); ?>" class="readMore-link"><?php the_title(); ?></a>
						<div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
                          <div class="readMore-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                        </div>
                        
                         <?php endwhile;  wp_reset_postdata(); endif; ?>
                         
                         <?php $args = array('posts_per_page' => 1, 'p' => $id_two); $the_query = new WP_Query($args); ?>
                        <?php if ( $the_query->have_posts()) : ?>
                        <?php while ( $the_query->have_posts() && $id_two !== '' ) : $the_query->the_post(); ?>
                        
                        <div class="readMore-item" style="position: absolute; left: 0px; top: 84px;"><a href="<?php the_permalink(); ?>" class="readMore-link"><?php the_title(); ?></a>
						<div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
                          <div class="readMore-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                        </div>
                        
                         <?php endwhile;  wp_reset_postdata(); endif; ?>
                         
                          <?php $args = array('posts_per_page' => 1, 'p' => $id_three); $the_query = new WP_Query($args); ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() && $id_three !== '' ) : $the_query->the_post(); ?>
                        
                        <div class="readMore-item" style="position: absolute; left: 0px; top:168px;"><a href="<?php the_permalink(); ?>" class="readMore-link"><?php the_title(); ?></a>
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