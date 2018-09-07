<?php
/*
 * Template Name: Contenu page
 * Description: Gabarit d'une page de contenu
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

$post_slug = get_post_field( 'post_name', get_post() ); 

// Body ID
$context['page_id'] = 'page-accueil';
// Body Class
$context['page_class'] = '';
// Body data-template
$context['page_template'] = 'page-accueil';
// Body data-niveau 
// Accueil = 0 | Accueil de section = 1 | Contenu = 2, 3, 4... selon la profondeur
$context['page_level'] = '0';

$options = get_option( 'custom' );

Timber::render('pages/page-accueil.twig', $context);


//}


?>