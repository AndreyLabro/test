<?
	global $_data_options;
	$i = 0;
	$nomore = true;
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			$i++;
			if ( $i > ( int )$_data_options->options[ 'books' ][ 'books_ppp' ] ) :
				$nomore = false;
				break;
			endif;
			?>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-15">
				<div class="books-item"><a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url( 'thumbnail' ); ?>);" class="books-cover"></a>
			 
				<div class="books-categories">
					 <?php echo get_the_term_list( $post->ID, 'book_tags', '', ', ', '</p>' ) ?>
				</div>
			  
				<a href="<?php the_permalink(); ?>" class="books-author"><?php the_field('book_author'); ?></a><a href="<?php the_permalink(); ?>" class="books-name"> 
				<q><?php the_title(); ?></q></a>
			</div>
		  </div>
			<?php
		endwhile;
		wp_reset_query();
	else :
		echo get_site_option_( 'books_not_found' );
	endif;
	
	#	Есть ли еще посты
	if ( $nomore ) 
		echo '<input type="hidden" id="no_posts_more" />';
?>