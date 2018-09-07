<?php

// PAGE OPTIONS
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> 'Coordonnées'
	));

	// Coordonnées
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Coordonnées',
		'menu_title'	=> 'Coordonnées',
		'parent_slug' 	=> 'theme-general-settings',
	));

	// Coordonnées
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Médias sociaux',
		'menu_title'	=> 'Médias sociaux',
		'parent_slug' 	=> 'theme-general-settings',
	));

	// Footer
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Entête/Pied de page',
		'menu_title'	=> 'Entête/Pied de page',
		'parent_slug' 	=> 'theme-general-settings',
	));
	
}


// Move RTE
add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_acf_admin_head() {
    
    ?>
    <script type="text/javascript">
    (function($) {
        
        $(document).ready(function(){
        	/*$('.acf-field-584825214eb62 .acf-input').append( $('#postdivrich') )*/
        });
		
        
    })(jQuery);    
    </script>
    <style type="text/css">
        .acf-field #wp-content-editor-tools {
            background: transparent;
            padding-top: 0;
        }
    </style>
    <?php    
    
}

// Customize path to save group field un json
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/settings/acf';
    
    // return
    return $path;

}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    // append path
    $paths[] = get_stylesheet_directory() . '/settings/acf';
    
    // return
    return $paths;
    
}



function my_relationship_result( $title, $post, $field, $post_id ) {
	//var_dump($post);
	// load a custom field from this $object and show it in the $result
	$post_date= $post->post_date;

	
	// append to title
	$title .= ' [' . $post_date.  ']';

	// return
	return $title;
}
// filter for every field
#add_filter('acf/fields/relationship/result', 'my_relationship_result', 10, 4);

// filter for a specific field based on it's name
//add_filter('acf/fields/relationship/result/name=my_relationship', 'my_relationship_result', 10, 4);

// filter for a specific field based on it's key
//add_filter('acf/fields/relationship/result/key=field_508a263b40457', 'my_relationship_result', 10, 4);