<?php
/*  ----------------------------------------------------------------------------

    What can be overwritten via the child theme:
     - everything from /parts folder
     - all the loops (loop.php loop-single-1.php) etc

     - the rest of the theme has to be modified via the theme api:
       http://forum.tagdiv.com/the-theme-api/

 */




/*  ----------------------------------------------------------------------------
    add the parent style + style.css from this folder
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 1001);
function theme_enqueue_styles() {
	$mainCSS = get_stylesheet_directory_uri() . '/css/main.css';
	$styleCSS = get_stylesheet_directory_uri() . '/style.css';
    wp_enqueue_style('td-theme', get_template_directory_uri() . '/style.css', '', '6.1c', 'all' );
    wp_enqueue_style('td-theme-child', get_stylesheet_directory_uri() . '/style.css', array('td-theme'), filemtime($styleCSS), 'all' );
	wp_enqueue_style('td-theme-child-main', get_stylesheet_directory_uri() . '/css/main.css', array('td-theme'), '1.3471a', 'all' );
	wp_enqueue_style('td-theme-child-bs', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array('td-theme'), '6.1c', 'all' );
	wp_enqueue_script( 'jq-mixitup',	get_stylesheet_directory_uri() . '/js/jquery.mixitup.js', array( 'jquery' ), '', true );

}

function my_enqueue($hook) {
    wp_enqueue_script( 'my_custom_script', get_stylesheet_directory_uri() . '/js/admin.js' );
}
add_action( 'admin_enqueue_scripts', 'my_enqueue' );


// *********** Ненужные области виджетов *********

function gorky_unregister_sidebars() {
	unregister_sidebar( 'td-footer-1' );
	unregister_sidebar( 'td-footer-2' );
	unregister_sidebar( 'td-footer-3' );
	unregister_sidebar( 'td-default' );

}
add_action( 'widgets_init', 'gorky_unregister_sidebars', 11 );

// Сайдбары (дополнительные области виджетов)

function textdomain_register_sidebars() {

	 // Главная
	 register_sidebar(
        array(
           'id' => 'main-home',
            'name' => __( 'Главная' ),
            'description' => __( 'Блоки на главной' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );

	// Сайдбар для 404
    register_sidebar(
        array(
           'id' => 'recommended-items',
            'name' => __( 'Рекомендации на 404' ),
            'description' => __( 'Область для материалов на странице 404' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

	 // Сайдбар для баннера над меню
	 register_sidebar(
        array(
           'id' => 'top-banner',
            'name' => __( 'Баннер в шапке' ),
            'description' => __( 'Область для добавления баннера в шапку' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

	 // Область виджетов для связаных материалов
	 register_sidebar(
        array(
           'id' => 'related-for-books',
            'name' => __( 'Связаные материалы' ),
            'description' => __( 'Область виджетов для связаных материалов' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );


	 register_sidebar(array(
		'name'=> TD_THEME_NAME . ' default',
		'id' => 'td-default-new', //the id is used by the importer
		'before_widget' => '<aside class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="block-title"><span>',
		'after_title' => '</span></div>'
	));

}
add_action( 'widgets_init', 'textdomain_register_sidebars' );

// Склонение месяцев

function true_russian_date_forms($the_date = '') {
	if ( substr_count($the_date , '---') > 0 ) {
		return str_replace('---', '', $the_date);
	}
	$replacements = array(
		"Январь" => "января",
		"Февраль" => "февраля",
		"Март" => "марта",
		"Апрель" => "апреля",
		"Май" => "мая",
		"Июнь" => "июня",
		"Июль" => "июля",
		"Август" => "августа",
		"Сентябрь" => "сентября",
		"Октябрь" => "октября",
		"Ноябрь" => "ноября",
		"Декабрь" => "декабря"
	);
	return strtr($the_date, $replacements);
}

add_filter('the_time', 'true_russian_date_forms');
add_filter('get_the_time', 'true_russian_date_forms');
add_filter('the_date', 'true_russian_date_forms');
add_filter('get_the_date', 'true_russian_date_forms');
add_filter('the_modified_time', 'true_russian_date_forms');
add_filter('get_the_modified_date', 'true_russian_date_forms');
add_filter('get_post_time', 'true_russian_date_forms');
add_filter('get_comment_date', 'true_russian_date_forms');

if ( ! function_exists('books_post_type') ) {

// Тип записей "Книги"
function books_post_type() {

	$labels = array(
		'name'                  => _x( 'Книги', 'Post Type General Name', 'newspaper' ),
		'singular_name'         => _x( 'Книга', 'Post Type Singular Name', 'newspaper' ),
		'menu_name'             => __( 'Книги', 'newspaper' ),
		'name_admin_bar'        => __( 'Книги', 'newspaper' ),
		'archives'              => __( 'Архив книг', 'newspaper' ),
		'parent_item_colon'     => __( 'Родительский элемент', 'newspaper' ),
		'all_items'             => __( 'Все книги', 'newspaper' ),
		'add_new_item'          => __( 'Добавить новую книгу', 'newspaper' ),
		'add_new'               => __( 'Добавить новую', 'newspaper' ),
		'new_item'              => __( 'Новая книга', 'newspaper' ),
		'edit_item'             => __( 'Редактировать', 'newspaper' ),
		'update_item'           => __( 'Обновить книгу', 'newspaper' ),
		'view_item'             => __( 'Посмотреть книгу', 'newspaper' ),
		'search_items'          => __( 'Поиск книги', 'newspaper' ),
		'not_found'             => __( 'Не найдено', 'newspaper' ),
		'not_found_in_trash'    => __( 'Не найдено в корзине', 'newspaper' ),
		'featured_image'        => __( 'Обложка', 'newspaper' ),
		'set_featured_image'    => __( 'Добавить обложку', 'newspaper' ),
		'remove_featured_image' => __( 'Удалить обложку', 'newspaper' ),
		'use_featured_image'    => __( 'Использовать как обложку', 'newspaper' ),
		'insert_into_item'      => __( 'Добавить', 'newspaper' ),
		'uploaded_to_this_item' => __( 'Загружено для этой книги', 'newspaper' ),
		'items_list'            => __( 'Список книг', 'newspaper' ),
		'items_list_navigation' => __( 'Навигация по списку', 'newspaper' ),
		'filter_items_list'     => __( 'Фильтр книг', 'newspaper' ),
	);
	$args = array(
		'label'                 => __( 'Книга', 'newspaper' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'taxonomies'            => array('post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true
	);
	register_post_type( 'books', $args );

}
add_action( 'init', 'books_post_type', 0 );

}


if ( ! function_exists('news_post_type') ) {

// Тип записей "Новости"
function news_post_type() {

	$labels = array(
		'name'                  => _x( 'Новости', 'Post Type General Name', 'newspaper' ),
		'singular_name'         => _x( 'Новость', 'Post Type Singular Name', 'newspaper' ),
		'menu_name'             => __( 'Новости', 'newspaper' ),
		'name_admin_bar'        => __( 'Новости', 'newspaper' ),
		'archives'              => __( 'Архив новостей', 'newspaper' ),
		'parent_item_colon'     => __( 'Родительский элемент', 'newspaper' ),
		'all_items'             => __( 'Все новости', 'newspaper' ),
		'add_new_item'          => __( 'Добавить новость', 'newspaper' ),
		'add_new'               => __( 'Добавить новую', 'newspaper' ),
		'new_item'              => __( 'Новая', 'newspaper' ),
		'edit_item'             => __( 'Редактировать', 'newspaper' ),
		'update_item'           => __( 'Обновить новость', 'newspaper' ),
		'view_item'             => __( 'Посмотреть новость', 'newspaper' ),
		'search_items'          => __( 'Поиск новости', 'newspaper' ),
		'not_found'             => __( 'Не найдено', 'newspaper' ),
		'not_found_in_trash'    => __( 'Не найдено в корзине', 'newspaper' ),
		'featured_image'        => __( 'Изображение', 'newspaper' ),
		'set_featured_image'    => __( 'Добавить изображение', 'newspaper' ),
		'remove_featured_image' => __( 'Удалить изображение', 'newspaper' ),
		'use_featured_image'    => __( 'Использовать изображение', 'newspaper' ),
		'insert_into_item'      => __( 'Добавить', 'newspaper' ),
		'uploaded_to_this_item' => __( 'Загружено для этой новости', 'newspaper' ),
		'items_list'            => __( 'Список новостей', 'newspaper' ),
		'items_list_navigation' => __( 'Навигация по списку', 'newspaper' ),
		'filter_items_list'     => __( 'Фильтр новостей', 'newspaper' ),
	);
	$args = array(
		'label'                 => __( 'Новость', 'newspaper' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'taxonomies'            => array('post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );

}

if ( ! function_exists('dates_post_type') ) {

// Тип записей "Даты"
function dates_post_type() {

	$labels = array(
		'name'                  => _x( 'Даты', 'Post Type General Name', 'newspaper' ),
		'singular_name'         => _x( 'Дата', 'Post Type Singular Name', 'newspaper' ),
		'menu_name'             => __( 'Даты', 'newspaper' ),
		'name_admin_bar'        => __( 'Даты', 'newspaper' ),
		'archives'              => __( 'Архив дат', 'newspaper' ),
		'parent_item_colon'     => __( 'Родительский элемент', 'newspaper' ),
		'all_items'             => __( 'Все даты', 'newspaper' ),
		'add_new_item'          => __( 'Добавить новую дату', 'newspaper' ),
		'add_new'               => __( 'Добавить новую', 'newspaper' ),
		'new_item'              => __( 'Новая дата', 'newspaper' ),
		'edit_item'             => __( 'Редактировать дату', 'newspaper' ),
		'update_item'           => __( 'Обновить дату', 'newspaper' ),
		'view_item'             => __( 'Просмотр даты', 'newspaper' ),
		'search_items'          => __( 'Поиск даты', 'newspaper' ),
		'not_found'             => __( 'Не найдена', 'newspaper' ),
		'not_found_in_trash'    => __( 'Не найдена в корзине', 'newspaper' ),
		'featured_image'        => __( 'Картинка', 'newspaper' ),
		'set_featured_image'    => __( 'Установить картинку', 'newspaper' ),
		'remove_featured_image' => __( 'Удалить кратинку', 'newspaper' ),
		'use_featured_image'    => __( 'Использовать', 'newspaper' ),
		'insert_into_item'      => __( 'Вставить в дату', 'newspaper' ),
		'uploaded_to_this_item' => __( 'Загружено для даты', 'newspaper' ),
		'items_list'            => __( 'Список дат', 'newspaper' ),
		'items_list_navigation' => __( 'Навигация по списку', 'newspaper' ),
		'filter_items_list'     => __( 'Фильтр дат', 'newspaper' ),
	);
	$args = array(
		'label'                 => __( 'Дата', 'newspaper' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true
	);
	register_post_type( 'date', $args );

}
add_action( 'init', 'dates_post_type', 0 );

}

if ( ! function_exists('cite_post_type') ) {

// Тип записей "Цитаты"
function cite_post_type() {

	$labels = array(
		'name'                  => _x( 'Цитаты', 'Post Type General Name', 'newspaper' ),
		'singular_name'         => _x( 'Цитата', 'Post Type Singular Name', 'newspaper' ),
		'menu_name'             => __( 'Цитаты', 'newspaper' ),
		'name_admin_bar'        => __( 'Цитаты', 'newspaper' ),
		'archives'              => __( 'Архив цитат', 'newspaper' ),
		'parent_item_colon'     => __( 'Родительский элемент', 'newspaper' ),
		'all_items'             => __( 'Все цитаты', 'newspaper' ),
		'add_new_item'          => __( 'Добавить цитату', 'newspaper' ),
		'add_new'               => __( 'Добавить новую', 'newspaper' ),
		'new_item'              => __( 'Новая', 'newspaper' ),
		'edit_item'             => __( 'Редактировать', 'newspaper' ),
		'update_item'           => __( 'Обновить цитату', 'newspaper' ),
		'view_item'             => __( 'Посмотреть цитату', 'newspaper' ),
		'search_items'          => __( 'Поиск цитаты', 'newspaper' ),
		'not_found'             => __( 'Не найдено', 'newspaper' ),
		'not_found_in_trash'    => __( 'Не найдено в корзине', 'newspaper' ),
		'items_list'            => __( 'Список цитат', 'newspaper' ),
		'items_list_navigation' => __( 'Навигация по списку', 'newspaper' ),
		'filter_items_list'     => __( 'Фильтр нцитат', 'newspaper' ),
	);
	$args = array(
		'label'                 => __( 'Цитата', 'newspaper' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'revisions'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true
	);
	register_post_type( 'cite', $args );

}
add_action( 'init', 'cite_post_type', 0 );

}



// Фильтр списка записей в админке по мета данным

add_filter( 'parse_query', 'ba_admin_posts_filter' );
add_action( 'restrict_manage_posts', 'ba_admin_posts_filter_restrict_manage_posts' );

function ba_admin_posts_filter( $query )
{
    global $pagenow;
    if ( is_admin() && $pagenow=='edit.php' && isset($_GET['ADMIN_FILTER_FIELD_NAME']) && $_GET['ADMIN_FILTER_FIELD_NAME'] != '') {
        $query->query_vars['meta_key'] = $_GET['ADMIN_FILTER_FIELD_NAME'];
    if (isset($_GET['ADMIN_FILTER_FIELD_VALUE']) && $_GET['ADMIN_FILTER_FIELD_VALUE'] != '')
        $query->query_vars['meta_value'] = $_GET['ADMIN_FILTER_FIELD_VALUE'];
    }
}


function ba_admin_posts_filter_restrict_manage_posts()
{
    global $wpdb;
    $sql = 'SELECT DISTINCT meta_key FROM '.$wpdb->postmeta.' ORDER BY 1';
    $fields = $wpdb->get_results($sql, ARRAY_N);
?>
<select name="ADMIN_FILTER_FIELD_NAME">
<option value=""><?php _e('Метаданные', 'baapf'); ?></option>
<?php
    $current = isset($_GET['ADMIN_FILTER_FIELD_NAME'])? $_GET['ADMIN_FILTER_FIELD_NAME']:'';
    $current_v = isset($_GET['ADMIN_FILTER_FIELD_VALUE'])? $_GET['ADMIN_FILTER_FIELD_VALUE']:'';
    foreach ($fields as $field) {
        if (substr($field[0],0,1) != "_"){
        printf
            (
                '<option value="%s"%s>%s</option>',
                $field[0],
                $field[0] == $current? ' selected="selected"':'',
                $field[0]
            );
        }
    }
?>
</select> <?php _e('Value:', 'baapf'); ?><input type="TEXT" name="ADMIN_FILTER_FIELD_VALUE" value="<?php echo $current_v; ?>" />
<?php
}

// Заголовки для списка записей "Книги"

add_filter('manage_books_posts_columns', 'bs_books_table_head');
function bs_books_table_head( $defaults ) {
	$defaults['author']  = 'Добавил';
    $defaults['book_author']  = 'Автор книги';
    $defaults['publishing']    = 'Издательство';
    $defaults['pub_year']   = 'Год издания';
    $defaults['rating'] = 'Рейтинг';
	unset($defaults['td_post_views']); //Убрали просмотры от базовой темы
	unset($defaults['wpseo-score']); // Убрали SEO очки
	//unset($defaults['tags']); // Убрали метки
    return $defaults;
}

// Данные для заголовков записей

add_action( 'manage_books_posts_custom_column', 'bs_books_table_content', 10, 2 );

function bs_books_table_content( $column_name, $post_id ) {

    if ($column_name == 'book_author') {
    $status = get_post_meta( $post_id, 'book_author', true );
    echo $status;
    }

    if ($column_name == 'publishing') {
    echo get_post_meta( $post_id, 'publishing', true );
    }

	 if ($column_name == 'pub_year') {
    $status = get_post_meta( $post_id, 'pub_year', true );
    echo $status;
    }

	$rating_arr = get_post_meta( $post_id, 'rating', true );

    if ($column_name == 'rating') {
    echo (int)$rating_arr['avrg'];
    }


}

// Сортировка данных в колонках таблицы "Книги"

add_filter( 'manage_edit-books_sortable_columns', 'bs_books_table_sorting' );
function bs_books_table_sorting( $columns ) {
  $columns['book_author'] = 'book_author';
  $columns['publishing'] = 'publishing';
  $columns['pub_year'] = 'pub_year';
   $columns['rating'] = 'rating';
  return $columns;
}

add_filter( 'request', 'bs_books_pub_year_column_orderby' );
function bs_books_pub_year_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'pub_year' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'pub_year',
            'orderby' => 'meta_value_num'
        ) );
    }

    return $vars;
}

add_filter( 'request', 'bs_books_rating_column_orderby' );
function bs_books_rating_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'rating' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'rating',
            'orderby' => 'meta_value_num'
        ) );
    }

    return $vars;
}

add_filter( 'request', 'bs_books_publishing_column_orderby' );
function bs_books_publishing_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'publishing' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'publishing',
            'orderby' => 'meta_value'
        ) );
    }

    return $vars;
}

add_filter( 'request', 'bs_books_book_author_column_orderby' );
function bs_books_book_author_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'book_author' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'book_author',
            'orderby' => 'meta_value'
        ) );
    }

    return $vars;
}

// Прячем от редакторов виджеты в консоли админики

function remove_dashboard_widgets() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['wpseo-dashboard-overview']);
	unset($wp_meta_boxes['dashboard']['side']['core']['myposts_widget']);

}

if (!current_user_can('manage_options')) {
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
}

// Прячем от редакторов лишнее из админ-меню

function remove_menus () {
global $menu;
	$restricted = array(__('Comments'), __('Tools'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
if (!current_user_can('manage_options')) {
	add_action('admin_menu', 'remove_menus');

	add_action( 'admin_menu', 'my_remove_menu_pages' );

	function my_remove_menu_pages() {
		remove_menu_page( 'vc-welcome' );
		remove_menu_page( 'search-filter' );
	}
}

// Убираем лишние элементы из конструктора

vc_remove_element( "vc_icon" );
vc_remove_element( "td_block_1" );
vc_remove_element( "td_block_2" );
vc_remove_element( "td_block_3" );
vc_remove_element( "td_block_4" );
vc_remove_element( "td_block_5" );
vc_remove_element( "td_block_6" );
vc_remove_element( "td_block_7" );
vc_remove_element( "td_block_8" );
vc_remove_element( "td_block_9" );
vc_remove_element( "td_block_10" );
vc_remove_element( "td_block_11" );
vc_remove_element( "td_block_12" );
vc_remove_element( "td_block_13" );
vc_remove_element( "td_block_14" );
vc_remove_element( "td_block_15" );
vc_remove_element( "td_block_16" );
vc_remove_element( "td_block_17" );
vc_remove_element( "td_block_18" );
vc_remove_element( "td_block_19" );
vc_remove_element( "td_block_20" );
vc_remove_element( "td_block_21" );
vc_remove_element( "td_block_22" );
vc_remove_element( "td_block_23" );
vc_remove_element( "td_block_24" );
vc_remove_element( "td_block_25" );

vc_remove_element( "td_block_big_grid_1" );
vc_remove_element( "td_block_big_grid_2" );
vc_remove_element( "td_block_big_grid_3" );
vc_remove_element( "td_block_big_grid_4" );
vc_remove_element( "td_block_big_grid_5" );
vc_remove_element( "td_block_big_grid_6" );
vc_remove_element( "td_block_big_grid_7" );
vc_remove_element( "td_block_big_grid_8" );
vc_remove_element( "td_block_big_grid_9" );
vc_remove_element( "td_block_big_grid_10" );
vc_remove_element( "td_block_big_grid_11" );
vc_remove_element( "td_block_big_grid_12" );

vc_remove_element( "td_block_big_grid_slide" );
vc_remove_element( "td_block_trending_now" );
vc_remove_element( "td_block_video_youtube" );
vc_remove_element( "td_block_video_vimeo" );
vc_remove_element( "td_block_ad_box" );
vc_remove_element( "td_block_authors" );
vc_remove_element( "td_block_homepage_full_1" );
vc_remove_element( "td_block_popular_categories" );
vc_remove_element( "td_block_slide" );
vc_remove_element( "td_block_text_with_title" );
vc_remove_element( "td_block_weather" );
vc_remove_element( "td_block_exchange" );
vc_remove_element( "td_block_instagram" );

vc_remove_element( "vc_facebook" );
vc_remove_element( "vc_tweetmeme" );
vc_remove_element( "vc_googleplus" );
vc_remove_element( "vc_pinterest" );

vc_remove_element( "vc_tabs" );
vc_remove_element( "vc_tour" );
vc_remove_element( "vc_accordion" );
vc_remove_element( "vc_button" );
vc_remove_element( "vc_button2" );
vc_remove_element( "vc_cta_button" );
vc_remove_element( "vc_cta_button2" );

vc_remove_element( "vc_tweetmeme" );
vc_remove_element( "vc_googleplus" );
vc_remove_element( "vc_pinterest" );

vc_remove_element( "vc_flickr" );
vc_remove_element( "vc_progress_bar" );
vc_remove_element( "vc_pie" );
vc_remove_element( "vc_round_chart" );
vc_remove_element( "vc_line_chart" );
vc_remove_element( "vc_media_grid" );
vc_remove_element( "vc_masonry_grid" );
vc_remove_element( "vc_masonry_media_grid" );
vc_remove_element( "vc_acf" );
vc_remove_element( "vc_gallery" );
vc_remove_element( "vc_text_separator" );
vc_remove_element( "vc_separator" );
vc_remove_element( "vc_tta_tabs" );
vc_remove_element( "vc_tta_tour" );
vc_remove_element( "vc_tta_accordion" );
vc_remove_element( "vc_tta_pageable" );
vc_remove_element( "vc_custom_heading" );
vc_remove_element( "vc_btn" );

vc_remove_element( "vc_gmaps" );
vc_remove_element( "contact-form-7" );
vc_remove_element( "vc_message" );
vc_remove_element( "vc_toggle" );
vc_remove_element( "vc_cta" );
vc_remove_element( "vc_widget_sidebar" );
vc_remove_element( "vc_posts_slider" );
vc_remove_element( "vc_empty_space" );
vc_remove_element( "vc_basic_grid" );

vc_remove_element( "vc_wp_search" );
vc_remove_element( "vc_wp_meta" );
vc_remove_element( "vc_wp_recentcomments" );
vc_remove_element( "vc_wp_calendar" );
vc_remove_element( "vc_wp_pages" );
vc_remove_element( "vc_wp_tagcloud" );
vc_remove_element( "vc_wp_custommenu" );
vc_remove_element( "vc_wp_text" );
vc_remove_element( "vc_wp_posts" );
vc_remove_element( "vc_wp_categories" );
vc_remove_element( "vc_wp_archives" );
vc_remove_element( "vc_wp_rss" );

// Убираем лишние метабоксы

function remove_my_post_metaboxes() {
	remove_meta_box( 'pageparentdiv','page','normal' );
	remove_meta_box( 'formatdiv','post','normal' );
	remove_meta_box( 'postcustom','post','normal' );
	remove_meta_box( 'trackbacksdiv','post','normal' );
}
add_action('admin_menu','remove_my_post_metaboxes');

// Стиль для админки

function admin_style() {
  wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


function build_taxonomies() {
   register_taxonomy(
					 'book_themes',
					 array('books', 'post'),
					 array(
						   'hierarchical' => false,
						   'label' => 'Связь',
						   'query_var' => true,
						   'rewrite' => true )
					 );
   register_taxonomy(
					 'book_tags',
					'books',
					 array(
						   'hierarchical' => false,
						   'label' => 'Тема',
						   'query_var' => true,
						   'rewrite' => true )
					 );

}



add_action( 'init', 'build_taxonomies', 0 );

//*********** Ненужные виджеты **************

function unregister_default_widgets() {
	unregister_widget('td_block1_widget');
	unregister_widget('td_block2_widget');
	unregister_widget('td_block3_widget');
	unregister_widget('td_block4_widget');
	unregister_widget('td_block5_widget');
	unregister_widget('td_block6_widget');
	unregister_widget('td_block7_widget');
	unregister_widget('td_block8_widget');
	unregister_widget('td_block9_widget');
	unregister_widget('td_block10_widget');
	unregister_widget('td_block11_widget');
	unregister_widget('td_block12_widget');
	unregister_widget('td_block13_widget');
	unregister_widget('td_block14_widget');
	unregister_widget('td_block15_widget');
	unregister_widget('td_block16_widget');
	unregister_widget('td_block17_widget');
	unregister_widget('td_block18_widget');
	unregister_widget('td_block19_widget');
	unregister_widget('td_block20_widget');
	unregister_widget('td_block21_widget');
	unregister_widget('td_block22_widget');
	unregister_widget('td_block23_widget');
	unregister_widget('td_block24_widget');
	unregister_widget('td_block25_widget');
	unregister_widget('td_block_ad_box_widget');
	unregister_widget('td_block_authors_widget');
	unregister_widget('td_block_exchange_widget');
	unregister_widget('td_block_instagram_widget');
	unregister_widget('td_block_popular_categories_widget');
	unregister_widget('td_block_slide_widget');
	unregister_widget('td_block_text_with_title_widget');
	unregister_widget('td_block_weather_widget');
	unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Widget_Nav_Menu');


}
add_action('widgets_init', 'unregister_default_widgets', 11);


// *********** Блоки для главной ************

class Main_Widget extends WP_Widget {
         public function __construct() {
             parent::WP_Widget(false, '1. Большой', 'description=Большой блок на всю ширину');
        }

        public function form($instance) {
			$text = "";
			$title = "";
			$id_one = "";
			$id_two = "";
			$id_three = "";
			if (!empty($instance)) {
				$text = $instance["text"];
				$title = $instance["title"];
				$id_one = $instance["id_one"];
				$id_two = $instance["id_two"];
				$id_three = $instance["id_three"];
			}

			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">Пометка</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $title . '"><br>';

			$tableId = $this->get_field_id("text");
			$tableName = $this->get_field_name("text");
			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $text . '"></p>';

			echo '<hr>';
			echo '<p>Связанные материалы</p>';
			$tableId = $this->get_field_id("id_one");
			$tableName = $this->get_field_name("id_one");
			echo '<label for="' . $tableId . '">Материал 1 (ID)</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $id_one . '"><br>';
			$tableId = $this->get_field_id("id_two");
			$tableName = $this->get_field_name("id_two");
			echo '<label for="' . $tableId . '">Материал 2 (ID)</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $id_two . '"><br>';
			$tableId = $this->get_field_id("id_three");
			$tableName = $this->get_field_name("id_three");
			echo '<label for="' . $tableId . '">Материал 3 (ID)</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $id_three . '"><br>';





		}

        public function update($newInstance, $oldInstance) {
			$values = array();
			$values["text"] = htmlentities($newInstance["text"]);
			$values["title"] = htmlentities($newInstance["title"]);
			$values["id_one"] = htmlentities($newInstance["id_one"]);
			$values["id_two"] = htmlentities($newInstance["id_two"]);
			$values["id_three"] = htmlentities($newInstance["id_three"]);
			$values["id_four"] = htmlentities($newInstance["id_four"]);
			return $values;
		}

        public function widget( $args, $instance ) {
			$text = $instance["text"];
			$id_one = $instance["id_one"];
			$id_two = $instance["id_two"];
			$id_three = $instance["id_three"];
			$id_four = $instance["id_four"];
			include(locate_template('blocks/block-main.php'));

        }

}
register_widget( 'Main_Widget' );

class Related_Block extends WP_Widget {
         public function __construct() {
             parent::WP_Widget(false, '10. 2/3 Связанные', 'description=Блок с двумя связанными материалами');
        }

        public function form($instance) {
			$text = "";
			$title = "";
			$id_one = "";
			$id_two = "";
			$id_three = "";
			if (!empty($instance)) {
				$text = $instance["text"];
				$title = $instance["title"];
				$id_one = $instance["id_one"];
				$id_two = $instance["id_two"];
				$id_three = $instance["id_three"];
			}

			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">Пометка</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $title . '"><br>';

			$tableId = $this->get_field_id("text");
			$tableName = $this->get_field_name("text");
			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $text . '"></p>';

			echo '<hr>';
			echo '<p>Связанные материалы</p>';
			$tableId = $this->get_field_id("id_one");
			$tableName = $this->get_field_name("id_one");
			echo '<label for="' . $tableId . '">Материал 1 (ID)</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $id_one . '"><br>';
			$tableId = $this->get_field_id("id_two");
			$tableName = $this->get_field_name("id_two");
			echo '<label for="' . $tableId . '">Материал 2 (ID)</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $id_two . '"><br>';
			$tableId = $this->get_field_id("id_three");
			$tableName = $this->get_field_name("id_three");
			echo '<label for="' . $tableId . '">Материал 3 (ID)</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $id_three . '"><br>';

		}

        public function update($newInstance, $oldInstance) {
			$values = array();
			$values["text"] = htmlentities($newInstance["text"]);
			$values["title"] = htmlentities($newInstance["title"]);
			$values["id_one"] = htmlentities($newInstance["id_one"]);
			$values["id_two"] = htmlentities($newInstance["id_two"]);
			$values["id_three"] = htmlentities($newInstance["id_three"]);
			return $values;
		}

        public function widget( $args, $instance ) {
			$text = $instance["text"];
			$id_one = $instance["id_one"];
			$id_two = $instance["id_two"];
			$id_three = $instance["id_three"];
			include(locate_template('blocks/block-related.php'));

        }

}
register_widget( 'Related_Block' );

class New_Book extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '3. Новая книга', 'description=Блок с новой книгой (рецензия дня)');
        }

       public function form($instance) {
			$text = "";
			$title = "";
			if (!empty($instance)) {
				$text = $instance["text"];
				$title = $instance["title"];
			}

			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">Пометка</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $title . '"><br>';

			$tableId = $this->get_field_id("text");
			$tableName = $this->get_field_name("text");
			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $text . '"></p>';



		}

        public function update($newInstance, $oldInstance) {
			$values = array();
			$values["text"] = htmlentities($newInstance["text"]);
			$values["title"] = htmlentities($newInstance["title"]);
			return $values;
		}

        public function widget( $args, $instance ) {
			$text = $instance["text"];
            include(locate_template('blocks/block-new-book.php'));
        }

}
register_widget( 'New_Book' );

class News_Block extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '2. Новости', 'description=Четыре новости в столбик');
        }

        public function form( $instance ) {
               echo '<p></p>';
        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               get_template_part('blocks/block', 'news');
        }

}
register_widget( 'News_Block' );

class Image_Half extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '7. 1/3 Контекст', 'description=Блок с изображением в верхней части');
        }

        public function form($instance) {
			$text = "";
			$title = "";
			if (!empty($instance)) {
				$text = $instance["text"];
				$title = $instance["title"];
			}

			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">Пометка</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $title . '"><br>';

			$tableId = $this->get_field_id("text");
			$tableName = $this->get_field_name("text");
			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $text . '"></p>';



		}

        public function update($newInstance, $oldInstance) {
			$values = array();
			$values["text"] = htmlentities($newInstance["text"]);
			$values["title"] = htmlentities($newInstance["title"]);
			return $values;
		}

        public function widget( $args, $instance ) {
			$text = $instance["text"];
			include(locate_template('blocks/block-image-half.php'));

        }

}
register_widget( 'Image_Half' );

class Image_Full extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '8. 1/3 Рецензия', 'description=Одиночный блок с фоновой картинкой');
        }

        public function form($instance) {
			$text = "";
			$title = "";
			if (!empty($instance)) {
				$text = $instance["text"];
				$title = $instance["title"];
			}

			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">Пометка</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $title . '"><br>';

			$tableId = $this->get_field_id("text");
			$tableName = $this->get_field_name("text");
			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $text . '"></p>';



		}

        public function update($newInstance, $oldInstance) {
			$values = array();
			$values["text"] = htmlentities($newInstance["text"]);
			$values["title"] = htmlentities($newInstance["title"]);
			return $values;
		}

        public function widget( $args, $instance ) {
			$text = $instance["text"];
			include(locate_template('blocks/block-image-full.php'));

        }

}
register_widget( 'Image_Full' );


class Two_Thirds_Block extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '9. 2/3 Рецензия', 'description=Блок на 2/3 ширины');
        }

        public function form($instance) {
			$text = "";
			$title = "";
			if (!empty($instance)) {
				$text = $instance["text"];
				$title = $instance["title"];
			}

			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">Пометка</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $title . '"><br>';

			$tableId = $this->get_field_id("text");
			$tableName = $this->get_field_name("text");
			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $text . '"></p>';



		}

        public function update($newInstance, $oldInstance) {
			$values = array();
			$values["text"] = htmlentities($newInstance["text"]);
			$values["title"] = htmlentities($newInstance["title"]);
			return $values;
		}

        public function widget( $args, $instance ) {
			$text = $instance["text"];
			include(locate_template('blocks/block-2-3.php'));

        }

}
register_widget( 'Two_Thirds_Block' );

//class Fragment_Long extends WP_Widget {
//        public function __construct() {
//             parent::WP_Widget(false, '11. Вертикальный', 'description=Вертикальный блок');
//        }
//
//        public function form($instance) {
//			$text = "";
//			$title = "";
//			if (!empty($instance)) {
//				$text = $instance["text"];
//				$title = $instance["title"];
//			}
//
//			$tableId = $this->get_field_id("title");
//			$tableName = $this->get_field_name("title");
//			echo '<label for="' . $tableId . '">Пометка</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $title . '"><br>';
//
//			$tableId = $this->get_field_id("text");
//			$tableName = $this->get_field_name("text");
//			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $text . '"></p>';
//
//
//
//		}
//
//        public function update($newInstance, $oldInstance) {
//			$values = array();
//			$values["text"] = htmlentities($newInstance["text"]);
//			$values["title"] = htmlentities($newInstance["title"]);
//			return $values;
//		}
//
//        public function widget( $args, $instance ) {
//			$text = $instance["text"];
//            include(locate_template('blocks/block-fragment-long.php'));
//        }
//
//}
//register_widget( 'Fragment_Long' );

class Cite_Block extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '6. Цитата', 'description=Блок с цитатой');
        }

        public function form( $instance ) {
               echo '<p></p>';
        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               get_template_part('blocks/block', 'cite');
        }

}
register_widget( 'Cite_Block' );

class Date_Block extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '5. Дата', 'description=Блок с датой');
        }

        public function form( $instance ) {
               echo '<p></p>';
        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               get_template_part('blocks/block', 'date');
        }

}
register_widget( 'Date_Block' );

//class Book_Week extends WP_Widget {
//         public function __construct() {
//             parent::WP_Widget(false, '11. Книги недели', 'description=Книга недели. Вертикальный.');
//        }
//
//        public function form($instance) {
//			$title = "";
//			$id_one = "";
//			$id_two = "";
//			$id_three = "";
//			$id_four = "";
//			$id_five = "";
//			if (!empty($instance)) {
//				$title = $instance["title"];
//				$id_one = $instance["id_one"];
//				$id_two = $instance["id_two"];
//				$id_three = $instance["id_three"];
//				$id_four = $instance["id_four"];
//				$id_five = $instance["id_five"];
//			}
//
//			$tableId = $this->get_field_id("title");
//			$tableName = $this->get_field_name("title");
//			echo '<label for="' . $tableId . '">Пометка</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $title . '"><br>';
//
//			$tableId = $this->get_field_id("id_one");
//			$tableName = $this->get_field_name("id_one");
//			echo '<label for="' . $tableId . '">Материал 1 (ID)</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $id_one . '"><br>';
//
//			$tableId = $this->get_field_id("id_two");
//			$tableName = $this->get_field_name("id_two");
//			echo '<label for="' . $tableId . '">Материал 2 (ID)</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $id_two . '"><br>';
//
//			$tableId = $this->get_field_id("id_three");
//			$tableName = $this->get_field_name("id_three");
//			echo '<label for="' . $tableId . '">Материал 3 (ID)</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $id_three . '"><br>';
//
//			$tableName = $this->get_field_name("id_four");
//			echo '<label for="' . $tableId . '">Материал 4 (ID)</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $id_four . '"><br>';
//
//			$tableName = $this->get_field_name("id_five");
//			echo '<label for="' . $tableId . '">Материал 5 (ID)</label><br>';
//			echo '<input id="' . $tableId . '" type="text" name="' .
//			$tableName . '" value="' . $id_five . '"><br>';
//
//
//
//
//		}
//
//        public function update($newInstance, $oldInstance) {
//			$values = array();
//			$values["title"] = htmlentities($newInstance["title"]);
//			$values["id_one"] = htmlentities($newInstance["id_one"]);
//			$values["id_two"] = htmlentities($newInstance["id_two"]);
//			$values["id_three"] = htmlentities($newInstance["id_three"]);
//			$values["id_four"] = htmlentities($newInstance["id_four"]);
//			$values["id_five"] = htmlentities($newInstance["id_five"]);
//			return $values;
//		}
//
//        public function widget( $args, $instance ) {
//			$id_one = $instance["id_one"];
//			$id_two = $instance["id_two"];
//			$id_three = $instance["id_three"];
//			$id_four = $instance["id_four"];
//			$id_five = $instance["id_five"];
//			include(locate_template('blocks/block-book-week.php'));
//
//        }
//
//}
//register_widget( 'Book_Week' );

class Nonfiction extends WP_Widget {
        public function __construct() {
             parent::WP_Widget(false, '12. Спецпроект', '');
        }

       public function form($instance) {
			$text = "";
			$title = "";
			if (!empty($instance)) {
				$text = $instance["text"];
				$title = $instance["title"];
			}

			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">Пометка</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $title . '"><br>';

			$tableId = $this->get_field_id("text");
			$tableName = $this->get_field_name("text");
			echo '<p><label for="' . $tableId . '">ID записи</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' .
			$tableName . '" value="' . $text . '"></p>';



		}

        public function update($newInstance, $oldInstance) {
			$values = array();
			$values["text"] = htmlentities($newInstance["text"]);
			$values["title"] = htmlentities($newInstance["title"]);
			return $values;
		}

        public function widget( $args, $instance ) {
			$text = $instance["text"];
            include(locate_template('blocks/block-nonfiction.php'));
        }

}
register_widget( 'Nonfiction' );

add_filter( 'manage_posts_columns', 'revealid_add_id_column', 5 );
add_action( 'manage_posts_custom_column', 'revealid_id_column_content', 5, 2 );


function revealid_add_id_column( $columns ) {
   $columns['revealid_id'] = 'ID';
   return $columns;
}

function revealid_id_column_content( $column, $id ) {
  if( 'revealid_id' == $column ) {
    echo $id;
  }
}

// body class for single post (show category)

add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
	if (is_single() ) {
		global $post;
		foreach((get_the_category($post->ID)) as $category) {
			// add category slug to the $classes array
			$classes[] = $category->category_nicename;
		}
	}
	// return the $classes array
	return $classes;
}

// Описание и подпись для изображения

add_shortcode('wp_caption', 'img_caption_add_description');
add_shortcode('caption', 'img_caption_add_description');
function img_caption_add_description($attr, $content = null)
{
    $post_id = str_replace('attachment_', '', $attr['id']);
    $img = get_post((int)$post_id);

    if (is_a($img, 'WP_Post')) {
        $attr['caption'] = $img->post_content;
    }

    return img_caption_shortcode($attr, $content);
}

// Первый параграф для архива новостей

//add_filter( 'wp_trim_excerpt', 'news_excerpt', 10, 2 );
//
//
//function news_excerpt($text, $raw_excerpt) {
//    if( ! $raw_excerpt ) {
//        $content = apply_filters( 'the_content', strip_shortcodes( get_the_content() ) );
//        $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
//    }
//    return $text;
//}

// Добавляем темам книг подсветку активной

function tribalpixel_tag_cloud_class_active($tags_data) {

        $body_class = get_body_class();

        foreach ($tags_data as $key => $tag) {
            if(in_array('term-'.$tag['id'], $body_class)) {
                $tags_data[$key]['class'] =  $tags_data[$key]['class'] ." active-tag";
            }
        }
        return $tags_data;
    }

add_filter('wp_generate_tag_cloud_data', 'tribalpixel_tag_cloud_class_active');


	// Ограничение поиска только по постам и новостям
	function customSearchFilter($query) {
		if ( !$query->is_admin && $query->is_search) {
		$query->set('post_type', array('news', 'post') );
		}
		return $query;
		}
	add_filter( 'pre_get_posts', 'customSearchFilter' );

	//Убить rel="next" от YOAST SEO на главной
	function genesis() {};

	function searchfilter($query) {
if ($query->is_search && !is_admin() ) {
	if(isset($_GET['post_type'])) {
		$type = $_GET['post_type'];
			if($type == 'books' || is_post_type_archive('books')) {
				$query->set('post_type',array('books'));
			}
			}
		}
		return $query;
	}
add_filter('pre_get_posts','searchfilter');

function sup_mce_buttons( $button ) {

	$button[] = 'superscript';
	$buttons[] = 'subscript';

	return $button;
}
add_filter( 'mce_buttons_2', 'sup_mce_buttons' );

// Подмена изображения шеринга результатов теста

add_filter('wpseo_opengraph_image', 'test_image');
function test_image($image) {
   global $post;
   if( is_page(7417) || is_page(9060) ) {
      $image = 'https://gorky.media/wp-content/themes/gorky/img/cover-podlozhka.jpg';

   } elseif (is_page(10076)) {
			$image = 'https://gorky.media/wp-content/uploads/2016/11/nonfiction-1.jpg';
	 }
   return $image;
}

//Замена мета-описания для SEO

add_filter('wpseo_metadesc', 'subtitle_desc');
function subtitle_desc($new_desc) {
   global $post;
   if( is_singular('post') ) {
       $new_desc = get_field('subtitle');

   }
   return $new_desc;
}

add_filter('wpseo_metadesc', 'nf_desc');
function nf_desc($new_desc) {
   global $post;
   if( is_page('10076') ) {
       $new_desc = '100 книг, большинство из которых изданы специально к ярмарке';

   }
   return $new_desc;
}


function yandex_metrica_pageview(){
	if ( ! is_single() ) {
		return false;
	}
	global $post;
	$post_slug = '/' . $post->post_name . '/';
	$metrica_options = get_option('metrica_options');
	// check options
	if ( ! is_array( $metrica_options ) || ! array_key_exists( 'counter_id', $metrica_options ) || ! array_key_exists( 'access_token', $metrica_options ) ) {
		return false;
	}
	// transient cache for prevent too many request
	$results = get_transient( 'ym_pageview_template_' . $metrica_options['counter_id'] );
	$date1 = date( 'Ymd', strtotime( '-1 year' ) );
	$date2 = date( 'Ymd' );
	if ( ! $results ) {
		$req_url = 'https://api-metrika.yandex.com/stat/v1/data.json?id='.$metrica_options['counter_id'].'&dimensions=ym:pv:URLPath&metrics=ym:pv:pageviews&filter=ym:pv:URLPathFull=='.$post_slug.'&oauth_token='.$metrica_options['access_token'].'&date1='.$date1.'&date2='.$date2;
		$response = wp_remote_get( $req_url, array( 'timeout' => 7, 'httpversion' => '1.1', 'sslverify' => false ) );
		$response_code = wp_remote_retrieve_response_code( $response );
		if ( '200' == $response_code ) {
			$body       = json_decode( $response['body'] );
			$dimensions = array();
			foreach ( (array) $body->data as $item ) {
				$dimensions[ $item->dimensions[0]->name ] = $item->metrics[0];
			}
			$pageviews = ( isset( $dimensions[ $post_slug ] ) ? $dimensions[ $post_slug ] : 0 );
			set_transient( 'ym_pageview_template_' . $metrica_options['counter_id'], $pageviews, 600 );
			return $pageviews;
		}
	}
	return false;
}

	require 'extras.php';
