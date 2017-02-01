<?php
/*  ----------------------------------------------------------------------------
    the blog index template
 */

get_header();

//set the template id, used to get the template specific settings - this was the old home.php template
$template_id = 'home';

//prepare the loop variables
global $loop_module_id, $loop_sidebar_position, $post;
$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 15); //module 1 is default
$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}
?>

<div class="container">
	<div id="grid_masonry" class="row">
		
		<?php dynamic_sidebar( 'Главная' ); ?>
		
	</div>
</div>


<?php
get_footer();