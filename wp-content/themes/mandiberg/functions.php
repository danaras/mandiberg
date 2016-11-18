<?php
/*



*/

	//hides admin bar

	show_admin_bar( false );

	//function to initiate any js files, etc
	function mandiberg_scripts() {

		// Register the style like this for a theme:
	    wp_register_style( 'mandiberg-style', get_template_directory_uri() . '/style.css', array(), '20120208', 'all' );
		wp_enqueue_style( 'mandiberg-style');

		//barba js for transitions

		 wp_register_script('barba', get_template_directory_uri() . '/build/barba.min.js', array ( 'jquery' ),'1.1', true);
		 wp_enqueue_script('barba');

		//js
		wp_register_script('js-file', get_template_directory_uri() . '/build/script.js', array ( 'jquery' ),'1.1', true);
		 wp_enqueue_script('js-file');

		

	}
	add_action( 'wp_enqueue_scripts', 'mandiberg_scripts' );



function load_fonts() {
            wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Roboto:400,400i');
            wp_enqueue_style( 'et-googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');




?>
