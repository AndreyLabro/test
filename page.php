<?php
/*  ----------------------------------------------------------------------------
    the default page template
 */


get_header();


//set the template id, used to get the template specific settings
$template_id = 'page';



$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

//get theme panel variable for page comments side wide
$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');


//read the custom single post settings - this setting overids all of them
$td_page = get_post_meta($post->ID, 'td_page', true);
if (!empty($td_page['td_sidebar_position'])) {
    $loop_sidebar_position = $td_page['td_sidebar_position'];
}

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}



/**
 * detect the page builder
 */
$td_use_page_builder = td_util::is_pagebuilder_content($post);




if ($td_use_page_builder) {

    // the page is rendered using the page builder template (no sidebars)
    if (have_posts()) { ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <div class="td-main-content-wrap td-main-page-wrap">
                <div class="container">
                    <?php the_content(); ?>
                </div>
                <?php
                if($td_enable_or_disable_page_comments == 'show_comments') {
                    ?>
                    <div class="container">
                        <div class="td-pb-row">
                            <div class="td-pb-span12">
                                <?php comments_template('', true); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div> <!-- /.td-main-content-wrap -->


        <?php endwhile; ?>
    <?php }
} else {

    //no page builder detected, we load a default page template with sidebar / no sidebar
    ?>

<div class="td-main-content-wrap">
    <div class="container <?php echo $td_sidebar_position; ?>">
      
        <div class="row">
            <?php
            switch ($loop_sidebar_position) {
                default:
                    ?>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                if (have_posts()) {
                                    while ( have_posts() ) : the_post();
                                        ?>
                                        <div class="td-page-header">
                                            <h1 class="entry-title td-page-title">
                                                <span><?php the_title() ?></span>
                                            </h1>
                                        </div>
                                        <div class="td-page-content">
                                        <?php
                                            the_content();
                                    endwhile;//end loop

                                }
                                ?>
								
															
                                </div>
                                <?php
                                if($td_enable_or_disable_page_comments == 'show_comments') {
                                    comments_template('', true);
                                }?>
                            </div>
                        </div>
                       
                    <?php
                    break;

                case 'sidebar_left':
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 <?php echo $td_sidebar_position; ?>-content" role="main">
                        <div class="td-ss-main-content">
                            <?php

                            if (have_posts()) {
                                while ( have_posts() ) : the_post();
                                    ?>
                                    <div class="td-page-header">
                                        <h1 class="entry-title td-page-title">
                                            <span><?php the_title() ?></span>
                                        </h1>
                                    </div>
                                    <div class="td-page-content">
                                    <?php
                                    the_content();
                                endwhile; //end loop
                            }
                            ?>
                            </div>
                            <?php
                            if($td_enable_or_disable_page_comments == 'show_comments') {
                                comments_template('', true);
                            }?>
                        </div>
                    </div>
	               
                    <?php
                    break;

                case 'no_sidebar':
                    ?>
                    <div class="td-pb-span12 td-main-content" role="main">

                        <?php
                        if (have_posts()) {
                            while ( have_posts() ) : the_post();
                                ?>
                                <div class="td-page-header">
                                    <h1 class="entry-title td-page-title">
                                        <span><?php the_title() ?></span>
                                    </h1>
                                </div>
                                <div class="td-page-content">
                                <?php
                                the_content();
                            endwhile; //end loop
                        }
                        ?>
                        </div>
                        <?php
                        if($td_enable_or_disable_page_comments == 'show_comments') {
                            comments_template('', true);
                        }?>
                    </div>
                    <?php
                    break;
            }
            ?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
	
	<?php if(is_home()) : ?>
	
		<h1>Home</h1>
	
	<?php endif; ?>
	
</div> <!-- /.td-main-content-wrap -->

    <?php
}




get_footer();
