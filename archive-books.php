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

<div class="container books">
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-9">
					
			<section class="book_search">
				<form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
					<div class="form-group">
						<div class="input-group -search">
							<input type="text" placeholder="Поиск" class="form-control" name="s" id="s">
							<input type="hidden" name="post_type" value="books" />
							<button type="submit" class="btn btn-default">Найти</button>
						</div>
					</div>
				</form>
				<div><a href="#" class="btn-link clear-filters" data-tag="0" id="clear-filters">Сбросить все фильтры</a></div>
				<?php
					if( ! get_site_option_( 'books_hide_wide_tags' ) ):
						$themes = get_terms( array( 
							'taxonomy'		=> 'book_tags_wide',
							'hide_empty'	=> true,
							'orderby'		=> 'name',
							'order'			=> 'ASC',
						) );
						$out = '';
						foreach( $themes as $one ) :
							$out .= '<a class="tag tag-wide-link-'. $one->term_id .' '. esc_attr( get_field( 'book_tag_css', $one ) ) .'" data-tag="'. $one->term_id .'"> <span>'. $one->name .'</span></a>';
						endforeach;
				?>
						<div class="books-tags"><span><?php _e( 'Теги', 'newspaper' ) ; ?>: </span>
						<?php echo $out; ?>
						</div>
				<?php endif; ?>
			</section>
		  
			<div class="book_theme">
			  
				<div class="visible-md visible-lg book_theme-title"><?php _e( 'Темы', 'newspaper' ) ; ?></div><div href="#" class="visible-xs visible-sm book_theme-title--link book_theme-toggle-js"> <span class="btn-text"><?php _e( 'Темы', 'newspaper' ) ; ?></span><span class="icon-caret"></span></div>

				<?php 
					$themes = get_terms( array( 
						'taxonomy'		=> 'book_tags',
						'hide_empty'	=> true,
						'orderby'		=> 'name',
						'order'			=> 'ASC',
					) );
					$out = '';
					foreach( $themes as $one ) :
						$out .= '<a class="btn-link tag-link-'. $one->term_id .'" data-tag="'. $one->term_id .'"><span>'. $one->name .'</span></a><br />';
					endforeach;
				?>
				
				<div class="book_theme-list">
					
					<?php echo $out; ?>
				</div>
			  
			</div>
		
			<section class="books_list" id="books_list_archive" data-current_page="1" >
				<div class="row">
				<?php include 'inc/books_archives_pro.php'; ?>
				</div>

				<button id="load-more" class="alm-load-more-btn more btn load-more"><?php _e( 'Показать еще', 'newspaper' ) ; ?></button>
			</section>

	
		</div>
	</div>
</div>


			
			

</div> <!-- /.td-pb-row -->
</div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php
get_footer();