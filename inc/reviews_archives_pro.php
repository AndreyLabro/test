<?php
	# Данная процедура позволяет ровно разложить по сетке посты
	# 3 поста по 1/3 Новая книга и 1 широкий пост
	# Также процедура умеет заполнять пустые пространства если за сеанс подгрузки количество не ровное
	#
	#
	#
	#	Создаем два массива - широких и узких постов
	#	И раскладываем в зависимости от принаделжности к категориям
	
	$order = array( 
		0 => array(),
		1 => array(),
	);

	$block_count = 0;
	$i = 0;
	$nomore = true;
	while ( have_posts() ) : the_post();
		$i++;
		if ( $i > ( int )get_site_option_( 'reviews::reviews_ppp' )) :
			$nomore = false;
			break;
		endif;
		$_post = $post;

		if( ! in_category( CAT_NEWBOOK ) ) :
			$order[ 0 ][] = $post;
		else :
			$order[ 1 ][] = $post;
		endif;
		$_order = $order;
		$block_count++; 

	endwhile; 
	#	Вывод инфо-тега. Сколько постов проанализировано на данный момент. Этот параметр влияет на отсуп для следующих запросов
	echo '<input type="hidden" class="last_post_info" value="'. $block_count .'" post-id="'. $_post->ID .'" />';
	wp_reset_query(); 
	
	

	#	Далее идет скрипт выравнивая сетки
	#	
	#	
	#	массив который будет определять ширину элементов
	#	значение 12 - полная ширина
	#	значение 8 - две трети ширины
	#	значение 6 - половина ширины
	#	значение 4 - треть ширины
	#
	#	Цикл GRID
	$post_grid = array();
	for( $i = 0; $i < $block_count; $i++ ) :
		if ( ( $i + 1 ) % 4 !== 0 ) :
		
			if ( count( $_order[ 1 ] ) == 0 ) :
				if ( count( $_order[ 0 ] ) !== 0 ) :
					array_shift( $_order[ 0 ] );
					$post_grid[ $i ] = 12;
				endif;
				continue;
			endif;
			array_shift( $_order[ 1 ] );
			$post_grid[ $i ] = 4;
			
		else :
		
			if ( count( $_order[ 0 ] ) == 0 ) :
				if ( count( $_order[ 1 ] ) !== 0 ) :
					array_shift( $_order[ 1 ] );
					$post_grid[ $i ] = 4;
				endif;
				continue;
			endif;
			 array_shift( $_order[ 0 ] );
			$post_grid[ $i ] = 12;
			
		endif;
	endfor;
	
	#	Здесь производится корректировка ширины, если возникли пустоты из-за неровного количества элементов
	$__rpls = 0;
	$__r_idx = -1;

	if ( count( $order[ 1 ] ) % 3 == 1 && count( $order[ 1 ] ) >= 4 ) :
		for( $i = count( $post_grid ) - 1; $i >= 0; $i-- ) :
			if ( $__rpls > 3 )
				break;
			if ( $post_grid[ $i ] == 4 ) :
				$post_grid[ $i ] = 6;
				$__rpls++;
			endif;
			if (  $__rpls == 2 )
				$__r_idx = $i;
		endfor;
		$__buf = $post_grid[ $__r_idx ];
		$post_grid[ $__r_idx ] = $post_grid[ $__r_idx + 1 ];
		$post_grid[ $__r_idx + 1 ] = $__buf;
	elseif ( count( $order[ 1 ] ) % 3 == 1 ) :
		$post_grid[ 1 ] = 8;
	elseif ( count( $order[ 1 ] ) % 3 == 2  ) :
		for( $i = count( $post_grid ) - 1; $i >= 0; $i-- ) :
			if ( $__rpls > 1 )
				break;
			if ( $post_grid[ $i ] == 4 ) :
				$post_grid[ $i ] = 6;
				$__rpls++;
			endif;
		endfor;
	endif;
	
	#	Вывод постов в зависимости от сетки
	#	Написано так, что блоки с шириной 12 и 8 - это только широкие блоки
	#	Остальные - только узкие
	for( $i = 0; $i < $block_count; $i++ ) :
		/*
		echo "<script> console.log( \" 0 wide : " . count( $order[ 0 ] ) . " \" )</script>";
		echo "<script> console.log( \" 1 sigl : " . count( $order[ 1 ] ) . " \" )</script>";
		echo "<script> console.log( \"  \" )</script>";
		*/
		if ( $post_grid[ $i ] !== 12 && $post_grid[ $i ] !== 8 ) :
			if ( count( $order[ 1 ] ) == 0 ) :
				if ( count( $order[ 0 ] ) !== 0 )
					__write_wide_post_block( array_shift( $order[ 0 ] ) );
				continue;
			endif;
			__write_single_post_block( array_shift( $order[ 1 ] ), array( 12, 6, $post_grid[ $i ] ) );
		else :
			if ( count( $order[ 0 ] ) == 0 ) :
				if ( count( $order[ 1 ] ) !== 0 )
					__write_single_post_block( array_shift( $order[ 1 ] ) );
				continue;
			endif;
			__write_wide_post_block( array_shift( $order[ 0 ] ), array( 12, ( $post_grid[ $i ] == 8 ? 6 : 12 ), $post_grid[ $i ] ) );
		endif;
	endfor;
	#	Есть ли еще посты
	if ( $nomore ) 
	echo '<input type="hidden" id="no_posts_more" />';

	function __write_single_post_block( $_post, $width = array( '12', '6', '4' ) ){
	?>
	 <div class="col-xs-<?php echo $width[0] ?> col-sm-<?php echo $width[1] ?> col-md-<?php echo $width[2] ?> grid-item">
	  <section class="mediaBlock -withBg -lighten -newBook">
		<div class="mediaBlockInfo">
            <a href="<?php echo get_permalink( $_post->ID ); ?>" class="mediaBlockInfo-link-block"></a>
			<div class="mediaBlockInfo-category">Новая книга</div>
		  <div style="background-image: url(<?php echo get_the_post_thumbnail_url( $_post->ID, 'large' ); ?>)" class="mediaBlockInfo-img"></div>
		  <div class="mediaBlockInfo-date"><?php echo get_the_time( get_option( 'date_format' ), $_post->ID  ); ?></div>
		  <div class="mediaBlockInfo-main"><a href="<?php echo get_permalink( $_post->ID ); ?>" class="mediaBlockInfo-title"><?php echo  get_the_title( $_post->ID ); ?></a> <div class="mediaBlockInfo-about md-size"><?php the_field( 'subtitle', $_post->ID ); ?></div>
		  </div>
		</div>
	  </section>
	</div>
	<?php
	}
	function __write_wide_post_block( $_post, $width = array( '12', '12', '12' ) ){
	?>
	<div class="col-xs-<?php echo $width[0] ?> col-sm-<?php echo $width[1] ?> col-md-<?php echo $width[2] ?> grid-item" style="position: absolute; left: 0px; top: 0px;">
	  <section class="mediaBlock -withBg -fullWidth -sectionLong -default -lighten">
		<div class="mediaBlockInfo">
            <a href="<?php echo get_permalink( $_post->ID ); ?>" class="mediaBlockInfo-link-block"></a>
			<a href="<?php echo _get_author_link( $_post->ID ); ?>" class="mediaBlockInfo-author"><?php echo _get_author_full_name( $_post->ID ); ?></a>
			<div style="background-image: url(<?php the_field( 'alt_img', $_post->ID ); ?>);" class="mediaBlockInfo-img"></div><a href="#" class="article-author"></a>
			<div class="mediaBlockInfo-date"><?php echo get_the_time( get_option( 'date_format' ), $_post->ID  ); ?></div>
			<div class="mediaBlockInfo-main">
				<div class="row clear">
					<div class="col-md-9"><a href="<?php echo get_permalink( $_post->ID ); ?>" class="mediaBlockInfo-title"
						><span><q><?php echo  get_the_title( $_post->ID ); ?></q></span></a>
						<div class="mediaBlockInfo-about"><?php the_field( 'subtitle', $_post->ID ); ?></div>
					</div>
				</div>
			</div>
		</div>
	  </section>
	</div>
	<?php
	}
?>