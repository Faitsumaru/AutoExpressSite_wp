<?php
//Хуки WordPress – это функции, которые позволяют вам манипулировать процедурой без изменения файла в ядре WordPress.

add_action( 'wp_enqueue_scripts', function() { //хук-событие
    //for header.php
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap');
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' ); //link assets/css/style.css
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media.css' );

    //for footer.php
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );

    wp_add_inline_script('main', '$( ".contacts__btn" ).click(function() {
        alert( "Ваше заявка успешно отправлена!\nБлагодарим вас за потраченное время!");
      });');

    show_admin_bar( false );
});

add_action('get_header', 'my_filter_head');
function my_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb'); //delete 32px space from admin-panel
}

add_theme_support('post-thumbnails'); //хук-функция иконки сайта
add_theme_support('title-big'); //хук-ф-я нащвания сайта
add_theme_support('custom-logo'); //хук-ф-я кнопка изменения логотипа


//svg-start--
add_filter( 'upload_mimes', 'svg_upload_allow' );
# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );

# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library( $response ) {

	if ( $response['mime'] === 'image/svg+xml' ) {

		// Без вывода названия файла
		$response['sizes'] = [
			'medium' => [
				'url' => $response['url'],
			],
			// при редактирования картинки
			'full' => [
				'url' => $response['url'],
			],
		];
	}

	return $response;
}
//svg-end--
?>