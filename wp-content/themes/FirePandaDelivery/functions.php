<?php 

// регистрируем стили и добавляем их в очередь
function styles() {
	
	wp_enqueue_style( 'reset-css', get_template_directory_uri().'/css/reset.css');
	wp_enqueue_style( 'slider-css', get_template_directory_uri().'/css/slider.css');
	wp_enqueue_style( 'courier-css', get_template_directory_uri().'/css/courier.css');
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
}
// регистрируем стили
add_action('wp_enqueue_scripts', 'styles');

# подключаем скрипты к шаблону
function scripts() {
	wp_enqueue_script('slider-js', get_template_directory_uri() . '/js/slider.js');
	wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jQuery.js');
	wp_enqueue_script('map-js', get_template_directory_uri() . '/js/map.js');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
}
// регистрируем скрипты
add_action('wp_enqueue_scripts', 'scripts');