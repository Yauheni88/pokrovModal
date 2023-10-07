<?php

add_action( 'wp_enqueue_scripts', function () {
	
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/fancybox/fancybox.css' );
	wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

	
	wp_register_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
	wp_enqueue_script( 'swiper-bundle');
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), 'null', true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), 'null', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/fancybox/fancybox.umd.js', array(), 'null', true );
	wp_enqueue_script( 'tabs', get_template_directory_uri() . '/assets/js/tabs.js', array(), 'null', true );
	wp_enqueue_script( 'accord', get_template_directory_uri() . '/assets/js/accordion.js', array(), 'null', true );
	wp_enqueue_script( 'burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js', array(), 'null', true );
	wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), 'null', true );
	wp_enqueue_script( 'modalWindow', get_template_directory_uri() . '/assets/js/modal.js', array(), 'null', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 'null', true );
});

function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'news.php' ) ) {
        wp_enqueue_style( 'news', get_template_directory_uri() . '/news-page.css' );
    }
	if ( is_page_template( 'charity.php' ) ) {
        wp_enqueue_style( 'charity', get_template_directory_uri() . '/charity-page.css' );
    }
	if ( is_page_template( 'schedule.php' ) ) {
        wp_enqueue_style( 'schedule', get_template_directory_uri() . '/schedule-page.css' );
    }
	if ( is_page_template( 'sunday.php' ) ) {
        wp_enqueue_style( 'sunday', get_template_directory_uri() . '/sunday-page.css' );
    }
	if ( is_page_template( 'church.php' ) ) {
        wp_enqueue_style( 'church', get_template_directory_uri() . '/church-page.css' );
    }
	if ( is_page_template( 'construction.php' ) ) {
        wp_enqueue_style( 'construction', get_template_directory_uri() . '/construction-page.css' );
    }
	if ( is_page_template( 'priest.php' ) ) {
        wp_enqueue_style( 'priest', get_template_directory_uri() . '/priest-page.css' );
    }
	if ( is_page_template( 'shrines.php' ) ) {
        wp_enqueue_style( 'shrines', get_template_directory_uri() . '/shrines-page.css' );
    }
	if ( is_single()) {
		wp_enqueue_style( 'single', get_template_directory_uri() . '/single-page.css' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );








add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');





















// Подсчет количества посещений страниц
add_action( 'wp_head', 'kama_postviews' );

/**
 * @param array $args
 *
 * @return null
 */
function kama_postviews( $args = [] ){
	global $user_ID, $post, $wpdb;

	if( ! $post || ! is_singular() )
		return;

	$rg = (object) wp_parse_args( $args, [
		// Ключ мета поля поста, куда будет записываться количество просмотров.
		'meta_key' => 'views',
		// Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
		'who_count' => 1,
		// Исключить ботов, роботов? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.
		'exclude_bots' => true,
	] );

	$do_count = false;
	switch( $rg->who_count ){

		case 0:
			$do_count = true;
			break;
		case 1:
			if( ! $user_ID )
				$do_count = true;
			break;
		case 2:
			if( $user_ID )
				$do_count = true;
			break;
	}

	if( $do_count && $rg->exclude_bots ){

		$notbot = 'Mozilla|Opera'; // Chrome|Safari|Firefox|Netscape - все равны Mozilla
		$bot = 'Bot/|robot|Slurp/|yahoo';
		if(
			! preg_match( "/$notbot/i", $_SERVER['HTTP_USER_AGENT'] ) ||
			preg_match( "~$bot~i", $_SERVER['HTTP_USER_AGENT'] )
		){
			$do_count = false;
		}

	}

	if( $do_count ){

		$up = $wpdb->query( $wpdb->prepare(
			"UPDATE $wpdb->postmeta SET meta_value = (meta_value+1) WHERE post_id = %d AND meta_key = %s",
			$post->ID, $rg->meta_key
		) );

		if( ! $up ){
			add_post_meta( $post->ID, $rg->meta_key, 1, true );
		}

		wp_cache_delete( $post->ID, 'post_meta' );
	}

}

?>