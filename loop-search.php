<?php if (have_posts()) { ?>

<div class="search-list">

<?php while (have_posts()) : the_post(); ?>
<?php $categories = get_the_category();?>
<div class="search-item">
                  <?php if(!get_field( 'author' )) : $aut_empty = 'empty'; endif; ?>
                  <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-8 <?php echo $aut_empty; ?>"><a href="<?php echo get_permalink(get_field( 'author' )->ID); ?>" class="article-author"><?php echo get_field( 'author' )->post_title, ' ', get_field( 'autor_name', get_field( 'author' )->ID ); ?></a></div>
                    <div class="col-xs-4 col-sm-4 col-md-2 <?php echo $aut_empty; ?>">
                    
                    <?php if( $categories[0]->slug == 'new-book' ) { ?>
                    <a href="/reviews" class="search-item-section">Рецензии</a>
                    <?php } elseif( $categories[0]->slug == 'intervyu' ) { ?>
                    <a href="/context" class="search-item-section">Контекст</a>
                     <?php } elseif( get_post_type($post->ID) == 'news' ) { ?>
                    <a href="/news" class="search-item-section">Новости</a>
                    
                    <?php } else { ?>
                    
                    <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="search-item-section">
                    <?php echo  esc_html( $categories[0]->name ); ?>
                    </a>
                    
                    <?php } ?>

                  </div>
                    <div class="col-xs-4 col-sm-4 col-md-2 text-right <?php echo $aut_empty; ?>">
                      <div class="search-item-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-sm-12 col-md-8"><a href="<?php the_permalink(); ?>" class="search-item-title"><?php the_title(); ?></a>
                      <div class="search-item-about"><?php wp_strip_all_tags(the_excerpt()); ?></div>
                    </div>
                  </div>
                </div>

<?php endwhile; ?>
<?php $term = get_search_query(); ?>
<?php echo do_shortcode('[ajax_load_more repeater="template_3" post_type="post, news" search="'. $term .'" offset="4" posts_per_page="4" pause="true" scroll="false" button_label="Показать еще"]'); ?>

</div>

<?php }  else { ?>

<p>По вашему запросу ничего не найдено</p>

<?php } ?>