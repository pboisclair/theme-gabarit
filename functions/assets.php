<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
//** 
// Ajoute 
//*** 

function theme_assets() {

	//Header
//	wp_register_style('fontes', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', array(), '1.0.0', 'all');
//	wp_register_style('f6', get_stylesheet_directory_uri() . '/assets/dist/css/foundation.min.css', array(), '1.0.0', 'all');
	
//	wp_register_style('main', get_stylesheet_directory_uri() . '/assets/dist/css/main.min.css', array(), '1.0.0', 'all');

//	wp_enqueue_style( 'fontes' );
//	wp_enqueue_style( 'f6' );
	
//	wp_enqueue_style( 'main' );
	
	wp_register_script( 'jquery_new', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_register_script( 'jquery-migrate_new', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery_new'), '3.0.1', true );
	wp_add_inline_script( 'jquery-migrate_new', 'var jQuery3 = $.noConflict(true);' );
// Enqueue jQue

	//Footer
	//wp_register_script( 'jquery', '//code.jquery.com/jquery-1.12.4.min.js', array(), '1', true );
	//wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-1.4.1.min.js', array(), '1', true );
		
	//wp_register_script( 'scripts', get_stylesheet_directory_uri().'/assets/dist/js/scripts.js', array(), 1, true );	

	wp_enqueue_script( 'jquery_new');
	wp_enqueue_script( 'jquery-migrate_new');

	//wp_enqueue_script(	'scripts' );
	
	
//	wp_enqueue_script( 'scripts');
	
	// Prépare pour le AJAX
//	wp_localize_script( 'scripts', 'bwaAjax', array('ajax_url' => admin_url( 'admin-ajax.php' )));	
}
add_action( 'wp_enqueue_scripts', 'theme_assets',200);



/**
 * Move js from header to footer
 */
function wpse_173003_enqueue_scripts() {
    //wp_scripts()->add_data( 'nom-du-fichier-js', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'wpse_173003_enqueue_scripts',250 );