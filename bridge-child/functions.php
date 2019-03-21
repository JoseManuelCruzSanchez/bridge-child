<?php

// enqueue the child theme stylesheet

Function qode_child_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'qode_child_theme_enqueue_scripts', 11);

function my_scripts_method() {
	wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/js/console.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
//add_action('admin_enqueue_scripts', 'my_scripts_method'); Para que aparezca en el wp-admin

