<?php
/*  ----------------------------------------------------------------------------
    the archive(s) template
 */

get_header();


//set the template id, used to get the template specific settings
$template_id = 'archive';

//prepare the loop variables
global $loop_module_id, $loop_sidebar_position, $part_cur_auth_obj;
$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 1); //module 1 is default
$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}

//read the current author object - used by here in title and by /parts/author-header.php
$part_cur_auth_obj = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));


//prepare the archives page title
if (is_day()) {
    $td_archive_title = __td('Daily Archives:', TD_THEME_NAME). ' ' . get_the_date();
} elseif (is_month()) {
    $td_archive_title = __td('Monthly Archives:', TD_THEME_NAME) . ' ' . get_the_date('F Y');
} elseif (is_year()) {
    $td_archive_title = __td('Yearly Archives:', TD_THEME_NAME) . ' ' . get_the_date('Y');
} else {
    $td_archive_title = __td('Archives', TD_THEME_NAME);
}
?>
<div class="td-main-content-wrap">
   <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7">
              <h2 class="margin-top-40 margin-bottom-40">Новости</h2>
              <div class="news-list">
				
				<?php 
					query_posts(array( 
						'post_type' => 'news',
						'paged' => $paged,
						'post_status' => 'publish'
					) );  
				?>
				
				 <?php while (have_posts()) : the_post(); ?>
				
                <div class="news-item">
                  <div class="row">
                    <div class="col-xs-9 col-sm-10"><a href="<?php the_permalink(); ?>" class="news-item-title"><?php the_title(); ?></a>
                      <div class="news-item-about"><?php echo get_the_excerpt(); ?></div>
                    </div>
                    <div class="col-xs-3 col-sm-2 text-right">
                      <div class="news-item-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                    </div>
                  </div>
                </div>
				
				<?php endwhile; wp_reset_query(); ?>
                
              <?php echo do_shortcode('[ajax_load_more repeater="template_2" post_type="news" offset="4" posts_per_page="4" scroll="false" pause="true" button_label="Показать еще" container_type="div"]'); ?>
            </div>
          </div>
        </div>
</div> <!-- /.td-main-content-wrap -->

<?php
get_footer();