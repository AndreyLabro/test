<?php
	$last_post	= json_decode( $_POST[ 'last_post' ] );
	$page		= $_POST[ 'page' ];

	require '../../../../wp-load.php';	
	$posts_per_page = ( int )get_site_option_( 'fragments::fragments_ppp' );

	$posts = query_posts( array(
		'cat'				=> CAT_FRAGMENTS,
		'offset'			=> ( $page - 1 ) * $posts_per_page,
		'paged'				=> 1,
		'posts_per_page'	=> $posts_per_page + 1,
	) );
	
	include 'frgm_ctxt_archives_pro.php';	
	//include 'context_archives_pro.php';
	
?>