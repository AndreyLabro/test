<?php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_module_id, $loop_sidebar_position, $post, $td_sidebar_position;

$td_mod_single = new td_module_single($post);

if ( have_posts() ) : the_post ;
	
?>
        <section class="about-author">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-9">
                <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" class="about-author--img"></div><a href="<?php echo get_post_type_archive_link( 'author' ); ?>" class="about-author--all">Все авторы</a>
                <div class="about-author--info">
                  <h2 class="about-author--name"><?php the_title(); ?> <?php the_field('author_name'); ?></h2>
                  <div class="about-author--description"><?php the_content(); ?></div>
                  <div class="about-author--share">
                    <div class="shareBlock-list"><a href="#" data-type="vkontakte" class="shareBlock-link share-btn-js"><span class="icon-vk-xs"></span></a><a href="#" data-type="facebook" class="shareBlock-link share-btn-js"><span class="icon-fb-xs"></span></a><a href="#" data-type="twitter" class="shareBlock-link share-btn-js"><span class="icon-tw-xs"></span></a><a href="#" data-type="telegram" class="shareBlock-link share-btn-js"><span class="icon-telegram-xs"></span></a><a href="whatsapp://send?text=<?php the_title(); ?> <?php the_permalink(); ?>" data-action="share/whatsapp/share" data-type="whatsapp" class="shareBlock-link hidden-md hidden-lg"><span class="icon-whatsapp-xs"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		<?php
			#	Получение последних материалов автора
			$posts = get_posts( array(
				'post_type'		=> 'post',
				'category__in'	=> array( 1,192, 210 ),
				'orderby'		=> 'date',
				'order'			=> 'DESC',
				'meta_query' => array(
					array(
						'key' => 'author',
						'value' => $post->ID,
					),
				),
			) );
			$out = '';
			$f = 
			'<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 grid-item">
					<section class="mediaBlock -withBg -img-right">
						<div class="row">
						  <div class="col-xs-12 col-md-6 col-sm-6">
							<div style="background-image: url(%s);" class="mediaBlockInfo-img"></div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="mediaBlockInfo mediaBlockInfo-default"><a href="%s" class="mediaBlockInfo-category">%s</a>
							  <div class="mediaBlockInfo-date">%s</div>
							  <div class="mediaBlockInfo-main"><a href="%s" class="mediaBlockInfo-title"> 
								  <q>%s</q></a></div>
							</div>
						  </div>
						</div>
					</section>
				</div>
			</div>';
			if ( is_array( $posts ) ):
				foreach( $posts as $one ) :
					#	Взять Primary category
					#	Если таковой нет, то первую попавшуюся
					$primary_cat = get_post_meta( $one->ID, '_yoast_wpseo_primary_category', true );
					$primary_cat = $primary_cat ? get_term( $primary_cat, 'category' ) : get_term( array_shift( wp_get_post_categories( $one->ID ) ) ) ;
					$out .= sprintf( $f,
								get_the_post_thumbnail_url( $one->ID, 'large' ),
								get_term_link( $primary_cat, 'category' ),
								get_term_field( 'name', $primary_cat ),
								date_i18n( 'j F', strtotime( $one->post_date ) ),
								get_permalink( $one->ID ),
								get_the_title( $one->ID ) //get_field( 'subtitle', $one->ID )
							);
				endforeach;
			endif;
		?>
        <div class="container">
		<?php echo $out; ?>
        </div>
		
<?php
	endif;
?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php

get_footer();