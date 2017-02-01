
<?php
/**
 * The single post loop Default template
 **/

if (have_posts()) {
    the_post();

    $td_mod_single = new td_module_single($post);
    ?>

    <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class());?>" <?php echo $td_mod_single->get_item_scope();?>>
      

        <?php echo $td_mod_single->get_social_sharing_top();?>


        <div class="td-post-content <?php if(!is_singular('books')) : ?>js-mediator-article<?php endif; ?>">
			<?php if(!is_singular('books')) : ?>
			<div class="article-description">
				<?php the_field('lead'); ?>
			</div>
			<?php endif; ?>

      	

        <?php echo $td_mod_single->get_content();?>
		
		<?php if(!is_singular('books')) : ?>
		<script id="js-mpf-mediator-init" data-counter="2771106" data-adaptive="true">!function(e){function t(t,n){if(!(n in e)){for(var r,a=e.document,i=a.scripts,o=i.length;o--;)if(-1!==i[o].src.indexOf(t)){r=i[o];break}if(!r){r=a.createElement("script"),r.type="text/javascript",r.async=!0,r.defer=!0,r.src=t;var d=function(){var e=a.getElementsByTagName("script")[0];e.parentNode.insertBefore(r,e)};"[object Opera]"==e.opera?a.addEventListener?a.addEventListener("DOMContentLoaded",d,!1):e.attachEvent("onload",d):d()}}}t("//top-fwz1.mail.ru/js/code.js","_tmr"),t("//mediator.imgsmail.ru/2.0/mpf-mediator.min.js","_mediator")}(window);</script>
		<?php endif; ?>
		
		
		
		
		
				
        </div>
		
		
		

		
		<?php if(is_singular('books')) : ?>
		<div class="rtelated-materials">
					
			<?php 
 
// get the custom post type's taxonomy terms
 
$custom_taxterms = wp_get_object_terms( $post->ID, 'book_themes', array('fields' => 'ids') );
// arguments
$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'tax_query' => array(
    array(
        'taxonomy' => 'book_themes',
        'field' => 'id',
        'terms' => $custom_taxterms
    )
),
'post__not_in' => array ($post->ID),
);
$related_items = new WP_Query( $args );

if ($related_items->have_posts()) :

while ( $related_items->have_posts() ) : $related_items->the_post();
?>
<?php $category = get_the_category( $custompost ); ?>
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
						  <?php if( get_field('partners') ) : ?>
		<div class="partner-block">
			<label class="partner-label">Партнерский материал</label>
			
		</div>
		<?php endif; ?>
                          <div class="mediaBlockInfo-main">
							
							<a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title"> 
                              <q><?php the_title(); ?></q></a></div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>

	
<?php
endwhile;

endif;
// Reset Post Data
wp_reset_postdata();
?>
			
		</div>
		<?php endif; ?>
		
		


        <footer>
            <?php // echo $td_mod_single->get_post_pagination();?>
            <?php // echo $td_mod_single->get_review();?>

            <div class="td-post-source-tags">
                <?php // echo $td_mod_single->get_source_and_via();?>
                <?php // echo $td_mod_single->get_the_tags();?>
            </div>

            <?php echo $td_mod_single->get_social_sharing_bottom();?>
            <?php // echo $td_mod_single->get_next_prev_posts();?>
            <?php // echo $td_mod_single->get_author_box();?>
	        <?php // echo $td_mod_single->get_item_scope_meta();?>
        </footer>

    </article> <!-- /.post -->
	<?php if(!is_singular('books')) : ?>
	<div class="article-share">
                  <div class="shareBlock-list">
					<a href="#" data-type="vkontakte" class="shareBlock-link share-btn-js">
						<span class="icon-vk-xs"></span>
					</a>
					<a href="#" data-type="facebook" class="shareBlock-link share-btn-js">
						<span class="icon-fb-xs"></span>
					</a>
					<a href="#" data-type="twitter" class="shareBlock-link share-btn-js">
						<span class="icon-tw-xs"></span>
					</a>
					<a href="#" data-type="telegram" class="shareBlock-link share-btn-js">
						<span class="icon-telegram-xs"></span>
					</a>
					<a href="whatsapp://send?text=<?php the_title(); ?> <?php the_permalink(); ?>" data-action="share/whatsapp/share" data-type="whatsapp" class="shareBlock-link hidden-md hidden-lg">
						<span class="icon-whatsapp-xs"></span>
					</a>
					<a href="https://flipboard.com" data-flip-widget="flipit" class="shareBlock-link share-btn-quote-js">
						<span class="icon-flip-xs"></span>
					</a>
                    <script src="https://cdn.flipboard.com/web/buttons/js/flbuttons.min.js" type="text/javascript"></script>

				  </div>
                </div>
	<?php endif; ?>

    <?php // echo $td_mod_single->related_posts();?>
	
	<?php 

$posts = get_field('related');


if( $posts ): ?>

<div class="row">
<div class="col-xs-12 col-sm-8 col-md-7 col-lg-5">
  <div class="article-readMore">
	<h2>Читайте также</h2>
	
	<?php foreach( $posts as $p ): ?>
	
	<?php $category = get_the_category( $p->ID ); ?>
	
	<div class="readMore-item"><a href="<?php echo get_permalink( $p->ID ); ?>" class="readMore-link"><?php echo get_the_title( $p->ID ); ?></a>
	<div class="sub-title"><?php echo the_field('subtitle', $p->ID); ?></div>
	  <div class="readMore-date"><?php echo get_the_date( '',$p->ID); ?></div>
	<?php if( $category[0]->slug == 'new-book' ) { ?>
                    <a href="/reviews" class="readMore-section">Рецензии</a>
                    <?php } elseif( $category[0]->slug == 'intervyu' ) { ?>
                    <a href="/context" class="readMore-section">Контекст</a>
                     <?php } elseif( get_post_type($post->ID) == 'news' ) { ?>
                    <a href="/news" class="readMore-section">Новости</a>
                    
                    <?php } else { ?>  
	<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ) ?>" class="readMore-section">
	<?php echo $category[0]->cat_name; ?>
	</a>
	<?php } ?>
	
	</div>
	
	<?php endforeach; ?>
	
	
  </div>
</div>
</div>



<?php endif; ?>



	

<?php
} else {
    //no posts
    echo td_page_generator::no_posts();
}