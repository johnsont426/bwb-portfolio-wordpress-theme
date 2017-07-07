<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function bwb_excerpt_length( $length ){
	return 16;
}

remove_filter ('acf_the_content', 'wpautop');

add_filter( 'excerpt_length', 'bwb_excerpt_length', 999);

function bwb_theme_menus() {
	register_nav_menus(array( 'primary-menu' => __('Primary Menu') )); 
}

add_action( 'init', 'bwb_theme_menus');

function bwb_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

bwb_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
bwb_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

function bwb_theme_styles() {
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Spectral|Courgette');
}

add_action( 'wp_enqueue_scripts', 'bwb_theme_styles');

function bwb_theme_js() {
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/main.js', array('jquery'), '', true);
	wp_enqueue_script( 'fontawesome_js', 'https://use.fontawesome.com/4992028fb6.js', '', '', true);
}

add_action( 'wp_enqueue_scripts', 'bwb_theme_js');

?>