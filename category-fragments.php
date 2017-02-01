<?php
/*  ----------------------------------------------------------------------------
    the blog index template
 */

get_header();

global $loop_module_id, $loop_sidebar_position;

$current_category_id = get_query_var('cat');
$current_category_obj = get_category($current_category_id);


//read the per category setting
$tdc_layout = td_util::get_category_option($current_category_id, 'tdc_layout');//swich by RADU A, get_tax_meta($cur_cat_id, 'tdc_layout');
$tdc_sidebar_pos = td_util::get_category_option($current_category_id, 'tdc_sidebar_pos');////swich by RADU A,  get_tax_meta($cur_cat_id, 'tdc_sidebar_pos');

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}

//set the template id, used to get the template specific settings
$template_id = 'category';

//prepare the loop variables

$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 1); //module 1 is default
$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

//override the category global template with the category specific settings
if (!empty($tdc_layout)) {
    $loop_module_id = $tdc_layout;
}

if (!empty($tdc_sidebar_pos)) {
    $loop_sidebar_position = $tdc_sidebar_pos;
}

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}

// make the category pulldown filter list to be equal
td_js_buffer::add_to_footer (
    'jQuery().ready(function() {' . "\r\n" .
    'var pulldown_size = jQuery(".td-category-pulldown-filter:first").width();' . "\r\n" .
    'if (pulldown_size > 113) { jQuery(".td-category-pulldown-filter .td-pulldown-filter-list").css({"min-width": pulldown_size, "border-top": "1px solid #444"}); }' . "\r\n" .
    '});'
);

?>



<?php td_api_category_template::_helper_show_category_template() ?>
<?php td_api_category_top_posts_style::_helper_show_category_top_posts_style() ?>

<?php 
				query_posts(array( 
					'post_type' => 'post',
					'cat' => 191,
					'paged' => $paged
				) );  
			?>

<div class="td-main-content-wrap">
    <div class="container">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1" id="fragments_archive" data-current_page="1">
              <div id="grid_masonry" class="row">
				
				<?php
				$posts_per_page = get_site_option_( 'fragments::fragments_ppp' );
				include 'inc/frgm_ctxt_archives_pro.php';
				//include 'inc/context_archives_pro.php';
				?>
               
			    <?php //while (have_posts()) : the_post(); ?>
			   
			   
				<?php 
				/*	   
                <div class="col-xs-12 grid-item" style="position: absolute; left: 0px; top: 0px;">
                  <section class="mediaBlock -withBg -fullWidth -sectionLong -default -lighten">
                    <div class="mediaBlockInfo">
                      <div style="background-image: url(<?php the_field('alt_img'); ?>);" class="mediaBlockInfo-img"></div><a href="<?php echo get_permalink(get_field( 'author' )->ID); ?>" class="article-author"><?php echo get_field( 'autor_name', get_field( 'author' )->ID ), ' ', get_field( 'author' )->post_title; ?></a>
                      <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                      <div class="mediaBlockInfo-main">
                        <div class="row clear">
                          <div class="col-md-9"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title"> <span>
                                <q><?php the_title(); ?></q></span></a>
                            <div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
				*/
				?>
						
				<?php //endwhile; wp_reset_query(); ?>
                
              </div>
							<button id="load-more" class="alm-load-more-btn more btn load-more"><?php _e( 'Показать еще', 'newspaper' ) ; ?></button>
            </div>
          </div>
        </div>
</div> <!-- /.td-main-content-wrap -->

<?php

get_footer();