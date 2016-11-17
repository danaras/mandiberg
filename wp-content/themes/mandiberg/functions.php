<?php
/*



*/

function mandiberg_scripts() {
	

	// Register the style like this for a theme:
    wp_register_style( 'mandiberg-style', get_template_directory_uri() . '/style.css', array(), '20120208', 'all' );
 


	// Load our main stylesheet.
	wp_enqueue_style( 'mandiberg-style');



}
add_action( 'wp_enqueue_scripts', 'mandiberg_scripts' );



?>
