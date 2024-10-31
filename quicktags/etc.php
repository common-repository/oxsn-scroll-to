<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_scroll_to_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_scroll_to_quicktags' );
	function oxsn_scroll_to_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_scroll_to_link_quicktag', '[oxsn_scroll_to_link]', '[oxsn_scroll_to_link paired_id="" class=""]', '[/oxsn_scroll_to_link]', 'oxsn_scroll_to_link', 'Scroll To Link', 201 );
				QTags.addButton( 'oxsn_scroll_to_content_quicktag', '[oxsn_scroll_to_content]', '[oxsn_scroll_to_content paired_id="" class=""]', '[/oxsn_scroll_to_content]', 'oxsn_scroll_to_content', 'Scroll To Content', 202 );
			</script>

		<?php

		}

	}

}


?>