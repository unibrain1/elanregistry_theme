<?php
	
/*
	Project:  Lotus Elan Registry

	Purpose:  Wordpress functions 

	File:  $HeadURL$

	Author: $Author$

	Last Change Date: $LastChangedDate$

	Revision: $Rev$

*/

// Get the parent theme
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
// End Get the parent theme

// Get the Elan Registry speciic code
include 'elanregistry.php';


?>
