jQuery( document ).ready( function( $ ) {
	hide_load_more_books();
	
	//	Переключение тем и тегов книг
	jQuery( '.container.books a.btn-link' ).click(
		function(){
			if ( jQuery( this ).attr( 'data-tag' ) == '0' )
				jQuery( '.book_theme-list a.btn-link, .books-tags a.tag' ).removeClass( 'active' );
			else
				jQuery( this ).toggleClass( 'active' );
			
			wp_query();
		}
	);
	jQuery( '.books-tags a.tag' ).click(
		function(){
			if ( jQuery( this ).hasClass( 'active' ) ){
				jQuery( this ).removeClass( 'active' );
			}
			else{
				jQuery( this ).siblings().removeClass( 'active' );
				jQuery( this ).addClass( 'active' );
			}
			
			wp_query();
		}
	);
	
	jQuery( '#books_list_archive #load-more' ).click(
		function(){
			wp_query( Number( jQuery( '#books_list_archive' ).attr( 'data-current_page' ) ) + 1 ) ;
		}
	)
	
	
});
	function hide_load_more_books(){
		
		jQuery( '#no_posts_more' ).each(
			function(){
				jQuery( '#books_list_archive #load-more' ).hide();
			}
		);
	}
	function wp_query( page ){
		jQuery( '#books_list_archive' ).stop().animate( {
			"opacity" : "0.2"
		}, 500 );
		page = page || 1;
		var book_tag = jQuery( '.books-tags a.tag.active' ).attr( 'data-tag' ) || 0;
		var book_themes = [];
		jQuery( '.book_theme-list a.btn-link.active' ).each(
			function( index, element ){
				book_themes.push( jQuery( element ).attr( 'data-tag' ) );
			}
		);
		book_themes = book_themes.length > 0 ? book_themes : 0;
		
		jQuery.post( templuri + "/inc/ajax_query_books.php",
			  {
				book_themes : JSON.stringify( book_themes ),
				book_tag : book_tag,
				page : page
			  },
			function( data ){
				var html = '';
				if ( page > 1 )
					html = jQuery( '#books_list_archive > .row' ).html();
				
				html += data ;
				jQuery( '#books_list_archive > .row' ).html( html );
				jQuery( '#books_list_archive' ).attr( 'data-current_page', page );
				jQuery( '#books_list_archive #load-more' ).show();
				hide_load_more_books();

				jQuery( '#books_list_archive' ).animate( {
					"opacity" : "1"
				}, 200 );
		}
		);


	}