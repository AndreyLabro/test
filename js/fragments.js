 jQuery( document ).ready( function( $ ) {

	hide_load_more_contexts();
	jQuery( '#load-more' ).click(
		function(){
			wp_query( Number( jQuery( '#fragments_archive' ).attr( 'data-current_page' ) ) + 1 ) ;
		}
	)
});

	function hide_load_more_contexts(){
		
		jQuery( '#no_posts_more' ).each(
			function(){
				jQuery( '#load-more' ).hide();
			}
		);
	}
	function wp_query( page ){
		jQuery( '#fragments_archive' ).stop().animate( {
			"opacity" : "0.2"
		}, 500 );
		page = page || 1;		
		
		jQuery.post( templuri + "/inc/ajax_query_fragments.php",
			  {
				page : page
			  },
			function( data ){
				var html = '';
				if ( page > 1 )
					html = jQuery( '#fragments_archive > .row' ).html();
				
				html += data ;
				jQuery( '#fragments_archive > .row' ).html( html );
				jQuery( '#fragments_archive' ).attr( 'data-current_page', page );
				jQuery( '#load-more' ).show();
				hide_load_more_contexts();

				jQuery( '#fragments_archive' ).animate( {
					"opacity" : "1"
				}, 200 );
			}
		);
	}