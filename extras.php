<?php
	ini_set( "display_errors","1" );
	ini_set( "display_startup_errors","1" );
	ini_set( 'error_reporting', E_ERROR | E_PARSE );

	define ( CAT_REVIEWS,	1 );
	define ( CAT_FRAGMENTS,	191 );
	define ( CAT_CONTEXT,	192 );
	define ( CAT_INTERVIEW,	210 );
	define ( CAT_NEWBOOK,	234 );
	define ( CAT_OLDBOOK,	486 );
	
	if ( ! function_exists( 'autor_post_type' ) ) {

	// Тип записей "Авторы"
	function autor_post_type() {

		$labels = array(
			'name'                  => _x( 'Авторы', 'Post Type General Name', 'newspaper' ),
			'singular_name'         => _x( 'Автор', 'Post Type Singular Name', 'newspaper' ),
			'menu_name'             => __( 'Авторы', 'newspaper' ),
			'name_admin_bar'        => __( 'Авторы', 'newspaper' ),
			'archives'              => __( 'Архив Авторов', 'newspaper' ),
			'parent_item_colon'     => __( 'Родительский элемент', 'newspaper' ),
			'all_items'             => __( 'Все Авторы', 'newspaper' ),
			'add_new_item'          => __( 'Добавить Автора', 'newspaper' ),
			'add_new'               => __( 'Добавить нового', 'newspaper' ),
			'new_item'              => __( 'Новый', 'newspaper' ),
			'edit_item'             => __( 'Редактировать', 'newspaper' ),
			'update_item'           => __( 'Обновить Автора', 'newspaper' ),
			'view_item'             => __( 'Посмотреть Автора', 'newspaper' ),
			'search_items'          => __( 'Поиск Автора', 'newspaper' ),
			'not_found'             => __( 'Не найдено', 'newspaper' ),
			'not_found_in_trash'    => __( 'Не найдено в корзине', 'newspaper' ),
			'items_list'            => __( 'Список Авторов', 'newspaper' ),
			'items_list_navigation' => __( 'Навигация по списку', 'newspaper' ),
			'filter_items_list'     => __( 'Фильтр Авторов', 'newspaper' ),
		);
		$args = array(
			'label'                 => __( 'Автор', 'newspaper' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 3,
			'menu_icon'             => 'dashicons-universal-access-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true
		);
		register_post_type( 'autor', $args );

	}
	add_action( 'init', 'autor_post_type', 0 );

	}

	add_filter( 'enter_title_here', '_autor_enter_title_here', 100, 2 );
	function _autor_enter_title_here( $post_title, $post ){
		return $post->post_type == 'autor' ? __( 'Фамилия автора', 'newspaper' ) : $post_title ;
	}

	#	Такснономия тегов для книг
	add_action('init', 'register_tags_for_books');
	function register_tags_for_books(){
		$labels = array(
			'name'              => 'Теги',
			'singular_name'     => 'Тег',
			'search_items'      => 'Найти тег',
			'all_items'         => 'Все теги',
			'parent_item'       => 'Родительский тег',
			'edit_item'         => 'Править тег',
			'update_item'       => 'Обновить тег',
			'add_new_item'      => 'Добавить новый тег',
			'new_item_name'     => 'Имя нового тега',
			'menu_name'         => 'Теги',
		); 
		$args = array(
			'labels'                => $labels,
			'description'           => '', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => null, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_tagcloud'         => true, // равен аргументу show_ui
			'hierarchical'          => true,
			'update_count_callback' => '',
			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		);
		register_taxonomy( 'book_tags_wide', array( 'books' ), $args );
	}
	add_action( 'pre_get_posts', '_include_custom_scripts', 1000 );
	function _include_custom_scripts(){
		if ( is_post_type_archive( array( 'books' ) ) )
			add_action( 'wp_enqueue_scripts', 'theme_enqueue_books', 1001);
		if ( is_category( CAT_REVIEWS ) )
			add_action( 'wp_enqueue_scripts', 'theme_enqueue_reviews', 1001);
		if ( is_category( CAT_FRAGMENTS ) )
			add_action( 'wp_enqueue_scripts', 'theme_enqueue_fragments', 1001);
		if ( is_category( CAT_CONTEXT ) )
			add_action( 'wp_enqueue_scripts', 'theme_enqueue_context', 1001);
	}
	function theme_enqueue_books() {
		wp_enqueue_script( 'books',	get_stylesheet_directory_uri() . '/js/books.js', array( 'jquery' ), '', true );
	}
	function theme_enqueue_reviews() {
		wp_enqueue_script( 'books',	get_stylesheet_directory_uri() . '/js/reviews.js', array( 'jquery' ), '', true );
	}
	function theme_enqueue_fragments() {
		wp_enqueue_script( 'fragments',	get_stylesheet_directory_uri() . '/js/fragments.js', array( 'jquery' ), '', true );
	}
	function theme_enqueue_context() {
		wp_enqueue_script( 'context',	get_stylesheet_directory_uri() . '/js/context.js', array( 'jquery' ), '', true );
	}
	
	#	Функция выдачи алфавита по фамилиям авторов
	#	
	#	'full' - какой алфавит использовать. Варианты :
	#		'abc' - вывести полный алфавит EN и РУ
	#		'ru' - вывести полный алфавит РУ
	#		'en' - вывести полный алфавит EN
	#	'format' - формат буквоссылки
	#	'format_empty - формат буквы без ссылки
	#	'space' - формат разделителя
	#	'exclude' - буквы которые исключить
	#
	function get_abc_by_autors( $args = array() ){
		$defaults = array(
			'format' 		=> '<a class="::ltr::">%s</a>',
			'format_empty' 	=> '<span class="disabled ::ltr::">%s</span>',
			'full'			=> false,
			'space'			=> ' ',
			'exclude'		=> array(),
		);
		$w = wp_parse_args( $args, $defaults );
		
		$autors = get_posts( array(
			'post_type'		=> 'autor',
			'numberposts'	=> -1,
			'orderby'		=> 'title ID',
			'order'			=> 'ASC',
		) );
		add_filter( 'get_abc_by_autors_filter_format', 'get_abc_by_autors_filter_format', 10, 2 );
		function get_abc_by_autors_filter_format( $f, $char ){
			return str_replace( '::ltr::', rus2translit( $char[ 0 ] ) . '_' . $char[ 1 ], $f );
		}
		$out = '';
		$abc = array();
		//var_dump ( $autors );
		if ( is_array( $autors ) ) :
			foreach( $autors as $autor )
				$abc[] = mb_strtolower( mb_substr( get_the_title( $autor ), 0, 1 ) );
			
			$abc = array_unique( $abc );
			//print_r( $abc );
			
			if ( $w[ 'full' ] ) :
				$azbuki = array(
					array( 'а', 'ru' ), array( 'б', 'ru' ), array( 'в', 'ru' ), array( 'г', 'ru' ), array( 'д', 'ru' ), array( 'е', 'ru' ), array( 'ё', 'ru' ), array( 'ж', 'ru' ), array( 'з', 'ru' ), array( 'и', 'ru' ), array( 'й', 'ru' ), array( 'к', 'ru' ), array( 'л', 'ru' ), array( 'м', 'ru' ), array( 'н', 'ru' ), array( 'о', 'ru' ), array( 'п', 'ru' ), array( 'р', 'ru' ), array( 'с', 'ru' ), array( 'т', 'ru' ), array( 'у', 'ru' ), array( 'ф', 'ru' ), array( 'х', 'ru' ), array( 'ц', 'ru' ), array( 'ш', 'ru' ), array( 'щ', 'ru' ), array( 'ь', 'ru' ), array( 'ы', 'ru' ), array( 'ъ', 'ru' ), array( 'э', 'ru' ), array( 'ю', 'ru' ), array( 'я', 'ru' ), 
					array( 'a', 'en' ), array( 'b', 'en' ), array( 'c', 'en' ), array( 'd', 'en' ), array( 'e', 'en' ), array( 'f', 'en' ), array( 'g', 'en' ), array( 'h', 'en' ), array( 'i', 'en' ), array( 'j', 'en' ), array( 'k', 'en' ), array( 'l', 'en' ), array( 'm', 'en' ), array( 'n', 'en' ), array( 'o', 'en' ), array( 'p', 'en' ), array( 'q', 'en' ), array( 'r', 'en' ), array( 's', 'en' ), array( 't', 'en' ), array( 'u', 'en' ), array( 'v', 'en' ), array( 'w', 'en' ), array( 'x', 'en' ), array( 'y', 'en' ), array( 'z', 'en' )
				);
				foreach( $azbuki as $char ) :
					if ( $w[ 'full' ] !== 'abc' && $w[ 'full' ] !== $char[ 1 ] ) continue;
					if ( in_array( $char[ 0 ], $w[ 'exclude' ] ) ) continue;
					$out .= ( in_array( $char[ 0 ], $abc ) ? sprintf( apply_filters( 'get_abc_by_autors_filter_format', $w[ 'format' ], $char ), $char[ 0 ] ) : sprintf( apply_filters( 'get_abc_by_autors_filter_format', $w[ 'format_empty' ], $char ), $char[ 0 ] ) ) . $w[ 'space' ];
					
				endforeach;
			else :			
				foreach( $abc as $char )
					$out .= sprintf( apply_filters( 'get_abc_by_autors_filter_format', $w[ 'format' ], $char ), $char ) . $w[ 'space' ];
					
			endif;
		endif;
		
		return trim( $w[ 'prepend' ] . $out . $w[ 'append' ] );
	}
	
	
	function posts_per_page_settings( $query ) {
		global $_data_options;
		
		if ( is_admin() || ! $query->is_main_query() )
			return;
		#	Вывод всех авторов на странице архива  и сортировка
		if ( is_post_type_archive( 'autor' ) ) {
			$query->set( 'posts_per_page', -1 );
			$query->set( 'orderby', 'title' );
			$query->set( 'order', 'ASC' );
			return;
		}
		if ( is_post_type_archive( 'books' ) ) {
			$query->set( 'posts_per_page', ( int )$_data_options->options[ 'books' ][ 'books_ppp' ] + 1 );
			return;
		}
		if ( is_category( CAT_REVIEWS ) ) {
			$query->set( 'posts_per_page', ( int )$_data_options->options[ 'reviews' ][ 'reviews_ppp' ] + 1 );
			return;
		}
		#	Контекст
		if ( is_category( CAT_CONTEXT ) ) {
			$query->set( 'posts_per_page', ( int )$_data_options->options[ 'context' ][ 'context_ppp' ] + 1 );
			return;
		}
		#	Фрагменты
		if ( is_category( CAT_FRAGMENTS ) ) {
			$query->set( 'posts_per_page', ( int )$_data_options->options[ 'fragments' ][ 'fragments_ppp' ] + 1 );
			return;
		}
	}
	add_action( 'pre_get_posts', 'posts_per_page_settings', 1 );
	
	
	add_action('init', 'nebster__site_options', 1 );
	function nebster__site_options(){
		global $_data_options;
		$_data_options->fields = array ( 
								'books'	=>	array(
												'books_hide_wide_tags'	=> array( 'checkbox', 'Скрывать теги книг на странице архива книг' ),
												'books_not_found'		=> array( 'textarea', 'HTML-текст для пустого результата поиска книг по тэгам' ),
												'books_ppp'				=> array( 'number', 'Книг на страницу' ),
												),	 
								'reviews'	=>	array(
												'reviews_ppp'			=> array( 'number', 'Рецензий на страницу' ),
												),	
								'context'	=>	array(
												'context_ppp'			=> array( 'number', 'Контекстов на страницу' ),
												),		
								'fragments'	=>	array(
												'fragments_ppp'			=> array( 'number', 'Фрагментов на страницу' ),
												),		
								'authors'	=>	array(
												'ph_photo'				=> array( 'photo', 'Пустое фото для Авторов' ),
												),								
							);	
	}
	
	function _get_author_full_name( $post_id ){
		if ( ! $post_id ) return ;
		return get_field( 'autor_name', get_field( 'author', $post_id )->ID ) . ' ' . get_field( 'author', $post_id )->post_title ;
	}
	
	function _get_author_link( $post_id ){
		if ( ! $post_id ) return ;
		return get_permalink( get_field( 'author', $post_id )->ID ) ;
	}
?>