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
});

add_theme_support('post-thumbnails'); //хук-функция иконки сайта
add_theme_support('title-big'); //хук-ф-я нащвания сайта
add_theme_support('custom-logo'); //хук-ф-я кнопка изменения логотипа

?>