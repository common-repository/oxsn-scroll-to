<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_scroll_to_inc_js' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_scroll_to_inc_js' );
	function oxsn_scroll_to_inc_js() {

		wp_enqueue_script( 'oxsn_scroll_to_etc_js', oxsn_scroll_to_plugin_dir_url . 'inc/js/etc.js', array(), '0.0.1', 'all' ); 

	}

}


?>