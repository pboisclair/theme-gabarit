<?php

if ( class_exists( 'Timber' ) ) {

	Timber::$dirname = array('templates','views','views/abstracts/includes');

	add_filter( 'timber/context', 'theme_timber_context'  );
	
	function theme_timber_context( $context ) {
		// OPTION disponible partout
		$context['options'] = get_fields('options');

		// Initialise les menus pour Timber
		$context['menu_main'] = new TimberMenu('main'); 
		$context['menu_secondary'] = new TimberMenu('secondary');
		$context['menu_membres'] = new TimberMenu('side'); 
		//$context['menu_right'] = new TimberMenu('right'); 
		$context['menu_footer'] = new TimberMenu('footer'); 
		//
		function plugin_wpml_code() {
			$context['langue'] = ICL_LANGUAGE_CODE;
			// Date Format ISO selon la langue
			$context['dateformat'] =( ICL_LANGUAGE_CODE == 'fr') ? 'j F Y' : 'F j, Y';
		}
		add_action( 'wpml_loaded', 'plugin_wpml_code' );

		// Statut de connexion // Si requis
		//$context['statut_connexion'] = checkUserLogin();
		//$context['statut_membre'] = (checkUserLogin()) ? 'membre' : 'nonmembre';
		
		// Detect home page
		$context['is_home'] = is_home();
		
		return $context;
		
	}
}


