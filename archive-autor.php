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

?>

	<div class="container autors">
		<div class="row margin-top-40">
            <div class="col-xs-12 col-sm-11 col-md-8 col-lg-8">
              <h2>Авторы</h2>
              <div class="letter-list">
				<?php
				//	echo get_abc_by_autors( array( 'format' => '<a class="filter" data-filter=".::ltr::">%s</a>', 'prepend' => '<a class="all filter" data-filter="all">' . __( 'Все', 'newspaper' ) . '</a>', 'full' => 'ru', 'exclude' => array( 'ъ', 'ь' ) ) );
				?>
			  </div>
              <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-3 col-lg-2">
                  <div class="current-letter" id="current-letter"></div>
                </div>
                <div class="col-xs-10 col-md-9 col-lg-10">
                  <div class="author-list row mixitup">
					<?php 
						$f = 
						'<div class="author mix %s col-xs-6 col-sm-4 col-md-4 col-lg-3">
						  <div style="background-image: url(%s);" class="author-image"></div><a href="%s" class="author-name">%s</a>
						</div>';
						while ( have_posts() ) : the_post();         
							$c = mb_substr( get_the_title(), 0, 1 );
							echo sprintf( $f,
									rus2translit( mb_strtolower( $c ) ) . '_' . ( preg_match('/^[0-9A-Za-z]+$/', $c ) != 0 ? 'en' : 'ru' ),
									has_post_thumbnail() ? get_the_post_thumbnail_url() : wp_get_attachment_image_url( get_site_option_( 'authors::ph_photo' ), 'medium' ),
									get_permalink(),
									get_field( 'autor_name' ) . ' ' . get_the_title()
								);
						endwhile; 
					?>
                  </div>
                </div>
              </div>
            </div>

		</div>
	</div>


                      
                  
</div> <!-- /.td-pb-row -->
</div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php
get_footer();