 jQuery( document ).ready( function( $ ) {

	hide_load_more_contexts();
	jQuery( '#load-more' ).click(
		function(){
			wp_query( Number( jQuery( '#context_archive' ).attr( 'data-current_page' ) ) + 1 ) ;
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
		jQuery( '#context_archive' ).stop().animate( {
			"opacity" : "0.2"
		}, 500 );
		page = page || 1;		
		
		jQuery.post( templuri + "/inc/ajax_query_context.php",
			  {
				page : page
			  },
			function( data ){
				var html = '';
				if ( page > 1 )
					html = jQuery( '#context_archive > .row' ).html();
				
				html += data ;
				jQuery( '#context_archive > .row' ).html( html );
				jQuery( '#context_archive' ).attr( 'data-current_page', page );
				jQuery( '#load-more' ).show();
				hide_load_more_contexts();

				jQuery( '#context_archive' ).animate( {
					"opacity" : "1"
				}, 200 );
			}
		);
	}