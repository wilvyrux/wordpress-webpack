<?php
//
// Your code goes below!
//

add_action( 'wp_enqueue_scripts', 'vntd_north_child_styles' );
function vntd_north_child_styles() {
    wp_enqueue_style( 'vntd-child-style', get_stylesheet_uri(), array( 'theme-styles' ) );
}


function theme_setup_styles_and_scripts()
{
  	 
    /***
	 * Wilvyrux customized SCSS Sheet
	 *========================================================================*/
	wp_enqueue_style(
		'wilvyrux-injection',
		get_theme_file_uri() .
		'/assets/css/editor.min.css',
		array(),
		'all' 
	);   
    
  
      wp_enqueue_script(
		'all-scripts',
        get_theme_file_uri() .
		'/assets/js/editor.js',
		array(),
		'all'
	);   
    
    
    
    // gravity_form_enqueue_scripts(2, true);

}
add_action( 'wp_enqueue_scripts', 'theme_setup_styles_and_scripts', 5000 );

