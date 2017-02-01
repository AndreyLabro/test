 jQuery( document ).ready( function( $ ) {

	hide_load_more_reviews();
	jQuery( '#load-more' ).click(
		function(){
			wp_query( Number( jQuery( '#reviews_archive' ).attr( 'data-current_page' ) ) + 1 ) ;
		}
	)
	
	
});

	function hide_load_more_reviews(){
		
		jQuery( '#no_posts_more' ).each(
			function(){
				jQuery( '#load-more' ).hide();
			}
		);
	}
	function wp_query( page ){
		jQuery( '#reviews_archive' ).stop().animate( {
			"opacity" : "0.2"
		}, 500 );
		page = page || 1;
		var last_post = [];
		var _offset = 0;
		jQuery( '.last_post_info' ).each(
			function( index, element ){
				_offset += Number( jQuery( element ).val() );
			}
		)
		last_post.push( _offset );
		last_post.push( jQuery( '.last_post_info' ).last().attr( 'post-id' ) );
		
		
		jQuery.post( templuri + "/inc/ajax_query_reviews.php",
			  {
				last_post : JSON.stringify( last_post ),
				page : page
			  },
			function( data ){
				var html = '';
				if ( page > 1 )
					html = jQuery( '#reviews_archive > .row' ).html();
				
				html += data ;
				jQuery( '#reviews_archive > .row' ).html( html );
				jQuery( '#reviews_archive' ).attr( 'data-current_page', page );
				jQuery( '#load-more' ).show();
				hide_load_more_reviews();

				jQuery( '#reviews_archive' ).animate( {
					"opacity" : "1"
				}, 200 );
		}
		);


	}