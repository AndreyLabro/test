<?php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_module_id, $loop_sidebar_position, $post, $td_sidebar_position;

$td_mod_single = new td_module_single($post);

?>

<?php if( get_field('partners') ) : ?>
<div class="partner-block">
<div class="container">
	<label class="partner-label">Партнерский материал</label>
	<div class="partner-info">Партнерские материалы «Горький» пишет по инициативе рекламодателей, которые платят за их публикацию.
		Они ничем не отличаются от любого другого текста на сайте — к созданию партнерских материалов редакция относится столь же
		серьезно и ответственно.</div>
	<a href="<?php the_field('partner_link'); ?>" target="_blank"><img src="<?php the_field('partner_logo'); ?>" class="partner-logo" /></a>
	<?php if( get_field('second_logo') ) : ?>
	<a href="<?php the_field('partner_link_2'); ?>" target="_blank"><img src="<?php the_field('partner_logo_2'); ?>" class="partner-logo" /></a>
	<?php endif; ?>
	</div>
</div>
</div>
<?php endif; ?>

<?php $post_views = intval($post->views); ?>
<?php if(!is_singular('books')) : ?>
<header style="background-image: url(<?php the_field('alt_img'); ?>);" class="article-header">
            <div class="container"><a href="<?php echo get_permalink(get_field( 'author' )->ID); ?>" class="article-author"><?php echo get_field( 'autor_name', get_field( 'author' )->ID ), ' ', get_field( 'author' )->post_title; ?></a>
              <div class="article-date"><?php the_date(); ?></div>
			  <?php if(gapp_get_post_pageviews() != 0) : ?>
			  <div class="article-views"><span class="icon-views"></span><?php echo gapp_get_post_pageviews(); ?></div>
			  <?php endif; ?>

              <h1 class="article-title">
                <div class="row">
                  <div class="col-xs-12 col-sm-11 col-md-8 col-lg-9"><span><q><?php the_title(); ?></q></span><div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div></div>
                </div>
              </h1>
            </div>
			<div class="copyright"><?php the_field('img_copy'); ?></div>
          </header>
<?php endif; ?>

<?php if(is_singular('books')) : ?>

<section class="book">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                <div class="book-info">
                  <div style="background-image: url(<?php the_post_thumbnail_url(); ?>);" class="book-cover"></div>

                  <div class="book-categories">

				  <?php echo get_the_term_list( $post->ID, 'book_tags', '', ', ', '</p>' ) ?>
				  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
                <div class="row">
                  <div class="col-xs-12 col-md-7 col-lg-8">
                    <div class="book-main">
                      <div class="book-author"><?php the_field('book_author'); ?></div>
                      <div class="book-name">
                        <q><?php the_title(); ?></q>
                      </div>
			<div class="book-publisher">
			  <?php if( get_field('editor') ): ?><div>Редактор: <?php the_field('editor'); ?></div><?php endif; ?>
			  <?php if( get_field('transl') ): ?><div>Переводчик: <?php the_field('transl'); ?></div><?php endif; ?>
			  <?php if( get_field('city') ): ?><div>Город: <?php the_field('city'); ?></div><?php endif; ?>
			  <?php if( get_field('publishing') ): ?><div>Издательство: <?php the_field('publishing'); ?></div><?php endif; ?>
			  <?php if( get_field('pub_year') ): ?><div>Год издания: <?php the_field('pub_year'); ?></div><?php endif; ?>
			  <?php if( get_field('pages') ): ?><div>Количество страниц: <?php the_field('pages'); ?></div><?php endif; ?>
			  <?php if( get_field('isbn') ): ?><div>ISBN: <?php the_field('isbn'); ?></div><?php endif; ?>
			</div>
			<?php if( get_field('bookmate') ): ?>
			<div class="book-buy">
						<a href="<?php the_field('bookmate'); ?>" target="_blank" class="btn btn-buy">Читать на Bookmate</a>
			</div>
			<?php endif; ?>

                      <button id="review-open" class="btn btn-white">Прислать свою рецензию</button>

                    </div>
                  </div>
                  <div class="col-xs-12 col-md-5 col-lg-4">
                    <div class="book-share">
                      <div class="shareBlock-list"><a href="#" data-type="vkontakte" class="shareBlock-link share-btn-js"><span class="icon-vk-xs"></span></a><a href="#" data-type="facebook" class="shareBlock-link share-btn-js"><span class="icon-fb-xs"></span></a><a href="#" data-type="twitter" class="shareBlock-link share-btn-js"><span class="icon-tw-xs"></span></a><a href="#" data-type="telegram" class="shareBlock-link share-btn-js"><span class="icon-telegram-xs"></span></a><a href="whatsapp://send?text=<?php the_title(); ?> <?php the_permalink(); ?>" data-action="share/whatsapp/share" data-type="whatsapp" class="shareBlock-link hidden-md hidden-lg"><span class="icon-whatsapp-xs"></span></a></div>
                    </div>
                  </div>
                </div>
				 <?php echo do_shortcode('[contact-form-7 id="2385" title="Отправка рецензии"]'); ?>
              </div>

            </div>
          </div>
        </section>

<?php endif; ?>

<div class="td-main-content-wrap">

    <div class="container td-post-template-default <?php echo $td_sidebar_position; ?>">
        <div class="td-crumb-container"><?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?></div>

        <div class="row">
            <?php

            //the default template
            switch ($loop_sidebar_position) {
                default: //sidebar right
					?>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 article-main" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
												
											
												
												<?php if(is_singular('post') || is_singular('news')) : ?>

		<div style="clear: both"></div>
        <div id="widget"></div>
				
				<?php endif; ?>


                    <?php
                    break;

                case 'sidebar_left':
                    ?>
                        <div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
		                <div class="td-pb-span4 td-main-sidebar" role="complementary">
			                <div class="td-ss-main-sidebar">
				                <?php get_sidebar(); ?>
			                </div>
		                </div>
                    <?php
                    break;

                case 'no_sidebar':
                    td_global::$load_featured_img_from_template = 'td_1068x0';
                    ?>
                        <div class="td-pb-span12 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                    <?php
                    break;

            }
            ?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php

get_footer();
