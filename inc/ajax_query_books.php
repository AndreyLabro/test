<?php
	$book_themes	= json_decode( $_POST[ 'book_themes' ] );
	$book_tag		= $_POST[ 'book_tag' ];
	$page			= $_POST[ 'page' ];

	require '../../../../wp-load.php';	
	global $_data_options;
	
	usleep( 500000 );
	$f_book_themes = 
	"array(
		'taxonomy' => 'book_tags',
		'field'    => 'id',
		'terms'    => \$book_themes,
		'operator' => 'AND'
	),";
	$f_book_tag = 
	"array(
		'taxonomy' => 'book_tags_wide',
		'field'    => 'id',
		'terms'    => \$book_tag,
		'operator' => 'IN'
	),";
	
	$code_book_themes	= $book_themes	? $f_book_themes	: '';
	$code_book_tag 		= $book_tag 	? $f_book_tag		: '';
	$perpage = ( int )$_data_options->options[ 'books' ][ 'books_ppp' ];
	$eval = 
	"\$posts = query_posts( array(
		'post_type'		=> 'books',
		'posts_per_page'=> \$perpage + 1,
		'offset'		=> \$perpage * ( \$page - 1 ),
		//'paged'			=> \$page,
		'paged'			=> 1,
		'tax_query' 	=> array(
			'relation' => 'AND',
			$code_book_themes
			$code_book_tag
		)
	) );";
	eval( $eval );
	
	include 'books_archives_pro.php';
?>