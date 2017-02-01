<?php
	function loop_srch_books( $posts = false ){
		global $wp_query;
		if ( ! $posts )
			$posts = $wp_query;
		while ( $posts->have_posts()) : $posts->the_post(); ?>

			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-15">
				<div class="books-item"><a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url( 'thumbnail' ); ?>);" class="books-cover"></a>
				 
				  <div class="books-categories">
					 <?php echo wp_filter_nohtml_kses( get_the_term_list( $post->ID, 'book_tags', '', ', ', '</p>' ) )?><p></p>
				  </div>
				  
				  <a href="<?php the_permalink(); ?>" class="books-author"><?php the_field('book_author'); ?></a><a href="<?php the_permalink(); ?>" class="books-name"> 
					<q><?php the_title(); ?></q></a>
				</div>
			</div>

		<?php endwhile;
		wp_reset_postdata();
	}
?>

<?php 
	global $books_by_author;
	if ( have_posts() ||  isset( $books_by_author ) ) { ?>
		<section class="books_list" id="books_list_archive">
			<div class="row">
			<?php
				if ( have_posts() ) loop_srch_books();
				if ( $books_by_author ) loop_srch_books( $books_by_author );
				$term = get_search_query(); 
			?>
			</div>
		</section>

<?php }  else { ?>

	<p class='we'>По вашему запросу ничего не найдено</p>

<?php } ?>