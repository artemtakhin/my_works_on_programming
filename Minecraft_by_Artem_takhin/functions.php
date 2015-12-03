<?php 

//загружаемые стили и скрипты

function load_style_script(){
	//wp_enqueue_script();
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
}

//загружаем стили и скрипты

add_action('wp_enqueue_scripts','load_style_script');

//поддержка миниатюр

add_theme_support('post-thumbnails');

//главное меню сайта

register_nav_menu("main-menu", 'Меню' );

//сайдбар

register_sidebar(array(
	'name' => 'Виджеты сайдбара',
	'id' => "sidebar",
	'description' => 'Здесь размещайте виджеты сайдбара',
	'before_widget' => '<div id="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h1>',
	'after_title' => '</h1>',

));

?>