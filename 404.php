<?php

//set the template id, used to get the template specific settings
$template_id = '404';

td_global::$current_template = $template_id;

td_global::$load_featured_img_from_template = 'full';

//prepare the loop variables
global $loop_module_id, $loop_sidebar_position;
$loop_sidebar_position = 'no_sidebar';
$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 1); //module 1 is default




get_header();

?>
<div class="td-main-content-wrap">
    <div class="td-container">
       <section class="margin-top-40 margin-bottom-40">
            <div class="row">
              <div class="col-sm-8 col-md-6">
                <h1>404</h1>
                <p class="quote-group">
                  <q>Забрать все книги бы да сжечь  </q>
                  <cite>Фамусов</cite>
                </p>
                <p>К сожалению, это явно не та страница, которую вы искали.<br>Можете ознакомиться с нашими самыми популярными материалами:</p>
              </div>
            </div>
          </section>
       
      
       <?php $category = get_the_category(); ?>
       <div class="most-viewed">
            <?php
            
            
            $args = array(
                    'posts_per_page' => 3,
                    'meta_key' => '_gapp_post_views',
                    'orderby' =>
                    'meta_value_num',
                    'exclude' => '4661'
                    );
            
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                
                <div class="col-xs-12 col-sm-12 col-md-8 grid-item">
                  <section class="mediaBlock -withBg -img-right">
                    <div class="row">
                      <div class="col-xs-12 col-md-6 col-sm-6">
                        <div style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);" class="mediaBlockInfo-img"></div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="mediaBlockInfo mediaBlockInfo-default">
						<?php if ( in_category(234) ) { ?>
            
            <a href="/reviews" class="mediaBlockInfo-category"><?php echo $category[0]->cat_name; ?></a>
            
            	 <?php } elseif(!in_category(234)) { ?>
                 
                  <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ) ?>"" class="mediaBlockInfo-category"><?php echo $category[0]->cat_name; ?></a>
                  
                   <?php } ?>
                          <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                          <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title"> 
                              <?php the_title(); ?></a></div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                
            <?php endforeach; 
            wp_reset_postdata();?>
      </div>
       
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php
get_footer();
?>