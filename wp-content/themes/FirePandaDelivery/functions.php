<?php 


// регистрируем стили и добавляем их в очередь
function styles() {
	
	wp_enqueue_style( 'reset-css', get_template_directory_uri().'/css/reset.css');
	// wp_enqueue_style( 'slick-css', get_template_directory_uri().'/slick/slick.css');
	// wp_enqueue_style( 'slick-theme-css', get_template_directory_uri().'/slick/slick-theme.css');	
	wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	
	
	wp_enqueue_style( 'courier-css', get_template_directory_uri().'/css/courier.css');
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
}
// регистрируем стили
add_action('wp_enqueue_scripts', 'styles');

# подключаем скрипты к шаблону
function scripts() {
	wp_enqueue_script('jquery-2.2.0-min-js', 'https://code.jquery.com/jquery-3.6.0.js');

	// wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/slick/slick.min.js');
	wp_enqueue_script('slick-min-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script('map-js', get_template_directory_uri() . '/js/map.js');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');

}
// регистрируем скрипты
add_action('wp_enqueue_scripts', 'scripts');


if(function_exists('register_nav_menus')){
    register_nav_menus(
        array( // создаём любое количество областей
            'main_menu' => 'Главное меню', // 'имя' => 'описание'
            'foot_menu' => 'Меню в футере'
        )
    );
}