<?php 
	global $_data_options;
	$i = 0;
	$nomore = true;
	if ( have_posts() ) :
		while (have_posts()) : the_post();
			$i++;
			if ( $i > ( int )$_data_options->options[ 'context' ][ 'context_ppp' ] ) :
				$nomore = false;
				break;
			endif;
			if( $block_count % 4 == 0 || $block_count  == 0 ) { ?>

			<div class="col-xs-12 grid-item <?php echo $block_count; ?>" style="position: absolute; left: 0px; top: 0px;">
			  <section class="mediaBlock -img-right -context">
				<div class="row">
				  <div class="hidden-xs col-md-4 col-sm-6">
					<div style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);" class="mediaBlockInfo-img"></div>
				  </div>
				  <div class="col-md-8 col-sm-6">
					<div class="mediaBlockInfo mediaBlockInfo-default 2">
						<a href="<?php the_permalink(); ?>" style="color: #fff;" class="mediaBlockInfo-link-block"></a>
					  <div style="background-image: url(<?php the_field('alt_img'); ?>);" class="visible-xs mediaBlockInfo-img"></div><a href="<?php echo get_permalink(get_field( 'author' )->ID); ?>" class="article-author"><?php echo get_field( 'author' )->post_title, ' ', get_field( 'autor_name', get_field( 'author' )->ID ); ?></a>
					  <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
					  <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title"><?php the_title(); ?></a>
						<div class="mediaBlockInfo-about"><?php the_field('subtitle'); ?></div>
					  </div>
					</div>
				  </div>
				</div>
			  </section>
			</div>

			<?php } else { ?>

			<div class="col-xs-12 col-sm-6 col-md-4 grid-item <?php echo $block_count; ?>">
			  <section class="mediaBlock -context">
				<div class="mediaBlockInfo 2">
					<a href="<?php the_permalink(); ?>" style="color: #fff;" class="mediaBlockInfo-link-block"></a>
				  <div style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);" class="mediaBlockInfo-img"></div><a href="<?php echo get_permalink(get_field( 'author' )->ID); ?>" class="article-author">
				  <?php echo get_field( 'autor_name', get_field( 'author' )->ID ), ' ', get_field( 'author' )->post_title; ?>
				  </a>
				  <div class="mediaBlockInfo-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
				  <div class="mediaBlockInfo-main"><a href="<?php the_permalink(); ?>" class="mediaBlockInfo-title md-size"><?php the_title(); ?></a>
					<div class="mediaBlockInfo-about md-size"><?php the_field('subtitle'); ?></div>
				  </div>
				</div>
			  </section>
			</div>

			<?php 
			}
			$block_count++; 
		endwhile;
	endif;
	
	#	Есть ли еще посты
	if ( $nomore ) 
		echo '<input type="hidden" id="no_posts_more" />';
?>