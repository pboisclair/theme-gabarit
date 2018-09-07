<?php
/**
 * Enregistre le CSS qui servira pour le RTE
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'assets/css/editor.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

/**
 * Registers an editor stylesheet for the current theme.
 */
function wpdocs_theme_add_editor_styles_font() {
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'wpdocs_theme_add_editor_styles_font' );

function itsg_allow_nbsp_in_tinymce( $init ) {
    $init['entities'] = '160,nbsp,38,amp,60,lt,62,gt';   
    $init['entity_encoding'] = 'named';
    return $init;
}
add_filter( 'tiny_mce_before_init', 'itsg_allow_nbsp_in_tinymce' );
