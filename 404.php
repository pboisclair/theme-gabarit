<?php

/**
 * @package codesource
 *
 * This file is part of the Code Source Studio Theme for WordPress
 * http://www.codesourcestudio.com
 *
 * Copyright (c) 2015 Code Source Studio. All rights reserved.
 * http://www.codesourcestudio.com
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 **/
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************


if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

// Get the always the French Slug
$post_id = icl_object_id( get_the_ID(), 'page', false, 'fr');
$post_slug = get_post_field( 'post_name', $post_id ); 

// Body ID
$context['page_id'] = 'page-404';
// Body Class
$context['page_class'] = '';
// Body data-template
$context['page_transition'] = '';
// Body data-niveau 
// Accueil = 0 | Accueil de section = 1 | Contenu = 2, 3, 4... selon la profondeur
$context['page_level'] = '1';
// Modele de page
$context['page_modele'] = '';


Timber::render('pages/page-404.twig', $context);
?>
