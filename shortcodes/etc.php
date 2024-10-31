<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_scroll_to_link paired_id="" class=""]
if ( ! function_exists ( 'oxsn_scroll_to_link_shortcode' ) ) {

	add_shortcode('oxsn_scroll_to_link', 'oxsn_scroll_to_link_shortcode');
	function oxsn_scroll_to_link_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
			'paired_id' => '',
		), $atts );

		$oxsn_scroll_to_class = esc_attr($a['class']);
		
		$oxsn_scroll_to_paired_id = esc_attr($a['paired_id']);
		$oxsn_scroll_to_paired_id = strtolower($oxsn_scroll_to_paired_id);

		return '<div class="oxsn_scroll_to_link ' . $oxsn_scroll_to_class . '" data-paired="' . $oxsn_scroll_to_paired_id . '">' . do_shortcode($content) . '</div>';

	}

}

//[oxsn_scroll_to_content paired_id="" class=""]
if ( ! function_exists ( 'oxsn_scroll_to_content_shortcode' ) ) {

	add_shortcode('oxsn_scroll_to_content', 'oxsn_scroll_to_content_shortcode');
	function oxsn_scroll_to_content_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
			'paired_id' => '',
		), $atts );

		$oxsn_scroll_to_class = esc_attr($a['class']);
		
		$oxsn_scroll_to_paired_id = esc_attr($a['paired_id']);
		$oxsn_scroll_to_paired_id = strtolower($oxsn_scroll_to_paired_id);

		return '<div class="oxsn_scroll_to_content ' . $oxsn_scroll_to_class . '" data-paired="' . $oxsn_scroll_to_paired_id . '">' . do_shortcode($content) . '</div>';

	}

}


?>