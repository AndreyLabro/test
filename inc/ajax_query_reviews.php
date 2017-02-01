<?php
	$last_post	= json_decode( $_POST[ 'last_post' ] );
	$page		= $_POST[ 'page' ];

	require '../../../../wp-load.php';	

	$posts = query_posts( array(
		'cat'				=> CAT_REVIEWS,
		'offset'			=> $last_post[ 0 ],
		'paged'				=> 1,
	) );
	
	include 'reviews_archives_pro.php';
	
?>