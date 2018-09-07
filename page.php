<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

$post_slug = get_post_field( 'post_name', get_post() ); 

// Body ID
$context['page_id'] = 'page-'.$post_slug;
// Body Class
$context['page_class'] = '';
// Body data-template
$context['page_template'] = '';
// Body data-niveau 
// Accueil = 0 | Accueil de section = 1 | Contenu = 2, 3, 4... selon la profondeur
$context['page_level'] = '2';

$options = get_option( 'custom' );

Timber::render('pages/page-contenu.twig', $context);
?>