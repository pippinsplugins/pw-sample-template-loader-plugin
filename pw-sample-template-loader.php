<?php
/*
 Plugin Name: PW Sample Template Loader
 Description: Illustrates how to build a template file loaded into a plugin using the Gamajo Template Loader class
 Author: Pippin Williamson
 Version: 1.0
*/

define( 'PW_SAMPLE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require PW_SAMPLE_PLUGIN_DIR . 'class-gamajo-template-loader.php';
require PW_SAMPLE_PLUGIN_DIR . 'pw-template-loader.php';

function pw_sample_shortcode() {

	$templates = new PW_Template_Loader;

	ob_start();
	$templates->get_template_part( 'content', 'header' );
	$templates->get_template_part( 'content', 'middle' );
	$templates->get_template_part( 'content', 'footer' );
	return ob_end_clean();

}
add_shortcode( 'pw_sample', 'pw_sample_shortcode' );